<?php

use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function (){
    Route::resource('invoices', InvoicesController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function (){

    // define invoices.data route to data/notes (calling getData in InvoicesController)

    Route::resource('invoices', InvoicesController::class);
    Route::get('data/notes', [InvoicesController::class, 'getData'])->name('invoices.data');

});