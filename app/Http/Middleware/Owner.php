<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Owner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $invoice = $request->route('invoice');
        if($invoice->user_id == Auth::user()->id || $invoice->shared->contains(Auth::user())){
            return $next($request);
        }else{
            abort('404');
        }        
    }
}
