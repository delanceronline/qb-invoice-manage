<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\LaravelAdapter;

class InvoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner')->only('show', 'edit', 'destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $invoices = Invoice::where('user_id', Auth::user()->id)->get();
        $shared = Auth::user()->shared;

        // combining with the shared invoices
        $invoices = $invoices->merge($shared);

        return view('invoices.index', compact(['invoices']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $isEdit = false;
        return view('invoices.create-edit', compact(['isEdit']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);

        $request->validate(
            [
                "title"=>"required",
                "content"=>"required",
                "total"=>"required|numeric",
                "share"=>"required",
            ]
        );

        // create a new invoice
        $invoice = new Invoice();
        $invoice->title = $request->title;
        $invoice->content = $request->content;
        $invoice->total = $request->total;
        $invoice->user_id = Auth::user()->id;
        $invoice->save();

        // attach all shared users from the submitted request
        $invoice->shared()->attach($request->share);

        return redirect(route('invoices.show', $invoice->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
        return view('invoices.show', compact(['invoice']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
        $isEdit = true;
        return view('invoices.create-edit', compact(['isEdit', 'invoice']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //dd($invoice);

        $request->validate(
            [
                "title"=>"required",
                "content"=>"required",
                "total"=>"required|numeric",
                "share"=>"required",
            ]
        );

        $invoice->title = $request->title;
        $invoice->content = $request->content;
        $invoice->total = $request->total;
        $invoice->save();

        // remove all existing shared users
        $invoice->shared()->detach();
        
        // attach all shared users from the submitted request
        $sharedUsers = $request->share;
        if($invoice->user_id != Auth::User()->id){
            array_push($sharedUsers, Auth::User()->id);
        }

        $invoice->shared()->attach($sharedUsers);

        return redirect(route('invoices.show', $invoice->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {        
        //dd($invoice);
        $invoice->delete();

        return redirect(route('invoices.index'));
    }

    public function getData()
    {
        /*
        $sqlBuilder = Invoice::select([
            'invoices.id', 'invoices.title', 'users.name', 'invoices.created_at'
        ])->join('users', 'users.id', 'invoices.user_id')->where('user_id', Auth::id());
        */

        /*
        $sqlBuilder = 'SELECT invoices.id, invoices.title, users.name, invoices.created_at FROM invoices invoices JOIN users users ON users.id = invoices.user_id WHERE invoices.user_id = '.Auth::id();
        */

        // including all shared users as well when they view the list
        $sqlBuilder = 'SELECT a.id, a.title, a.name, a.created_at FROM 
        ((SELECT invoices.id, invoices.title, users.name, invoices.created_at 
        FROM invoices invoices
        JOIN users users ON users.id = invoices.user_id 
        WHERE invoices.user_id = '.Auth::id().')
        UNION 
        (
            SELECT invoices.id, invoices.title,
            (SELECT name from users WHERE users.id = invoices.user_id) AS name, invoices.created_at                 
            FROM invoice_user invoice_user 
            JOIN invoices invoices ON invoices.id = invoice_user.invoice_id 
            JOIN users users ON users.id = invoice_user.user_id 
            WHERE invoice_user.user_id = ' . Auth::id() . ' 
        )) a';
        
        $dt = new Datatables(new LaravelAdapter);
        $dt->query($sqlBuilder);

        // make the title clickable
        $dt->edit('title', function ($data) {
            return '<a href="'.route('invoices.show', $data['id']).'">'.$data['title'].'</a> ';
        });

        // customize the action column
        $dt->add('action', function ($data) {
            return '<a href="'.route('invoices.edit', $data['id']).'">#edit </a> '.'/ <a href="'.route('invoices.destroy', $data['id']).'">#delete </a> ';
        });

        $dt->hide('id');

        return $dt->generate();
    }
}
