<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekTimkuri
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
        elseif (Auth::user()->TIPE_USER == 2) {
            return redirect('guru');
        }
        //kepsek
        if (Auth::user()->TIPE_USER == 4) {
            return $next('kepsek');
        }        
        //timkurikulum
        elseif (Auth::user()->TIPE_USER == 3) {
            return $next($request);
        }
        
    }
}
