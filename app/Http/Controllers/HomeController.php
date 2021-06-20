<?php

namespace App\Http\Controllers;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //admin
        if (Auth::user()->tipe_user == 1) {
            return redirect('admin/index');
        }        
        //timkurikulum
        elseif (Auth::user()->tipe_user == 3) {
            return redirect('timkuri');
        }
        //kepsek
        elseif (Auth::user()->tipe_user == 4) {
            return redirect('kepsek');
        }
        //guru
        elseif (Auth::user()->tipe_user == 2) {
            return redirect('guru');
        }
        // return redirect('login');
        return Auth::user();
    }
}
