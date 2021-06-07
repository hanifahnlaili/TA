<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekKepsek
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //admin
        if (Auth::user()->TIPE_USER == 1) {
            return $next('admin');
        }              
        //guru
        if (Auth::user()->TIPE_USER == 2) {
            return $next('guru');
        }
        //timkurikulum
        elseif (Auth::user()->TIPE_USER == 3) {
            return redirect('timkuri');
        }        
        //kepsek
        elseif (Auth::user()->TIPE_USER == 4) {
            return $next($request);
        }
        
    }
}
