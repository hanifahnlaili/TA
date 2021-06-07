<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekAdmin
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
            return redirect('kepsek');
        }
            //admin
        elseif (Auth::user()->TIPE_USER == 1) {
            return $next($request);
        }
    }
}
