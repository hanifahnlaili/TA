<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekGuru

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
        //timkurikulum
        elseif (Auth::user()->TIPE_USER == 3) {
            return redirect('timkuri');
        }
        //kepsek
        elseif (Auth::user()->TIPE_USER == 4) {
            return redirect('kepsek');
        }
        //guru
        elseif (Auth::user()->TIPE_USER == 2) {
            return $next($request);
        }
    }
}
