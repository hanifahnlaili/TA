<?php

namespace App\Http\Middleware;
use Auth;
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
        if (Auth::user()->tipe_user == 2) {
            return redirect('guru');
        }        
        //timkurikulum
        elseif (Auth::user()->tipe_user == 3) {
            return redirect('timkuri');
        }
        //kepsek
        elseif (Auth::user()->tipe_user == 4) {
            return redirect('kepsek');
        }
        //admin
        elseif (Auth::user()->tipe_user == 1) {
            return $next($request);
        }
    }
}
