<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userpengguna = DB::table('users')
        ->join('tipe_user','tipe_user.id_tipe_user','=','users.id_tipe_user')
        ->get();
        $tipe_user = DB::table('tipe_user')->get();
        return view('menu_userpengguna',['users'=>$userpengguna,'tipe_user'=>$tipe_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userpengguna = DB::table('users')->get();
        $tipe_user = DB::table('tipe_user')->get();
        return view('adduserpengguna',['users'=>$userpengguna,'tipe_user'=>$tipe_user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert(array(
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'id_tipe_user' => $request->input('id_tipe_user')
        ));
        return redirect('/menu_userpengguna');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userpengguna=DB::table('users')
        ->where('id_user',$id)
        ->join('tipe_user','tipe_user.id_tipe_user','=','users.id_tipe_user')
        ->get();
        $tipe_user=DB::table('tipe_user')->get();
        return view('edituserpengguna',['users' => $userpengguna,'tipe_user'=>$tipe_user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('users')->where('id_user', $request->id)
        ->update([
            'username' => $request->username,
            'password' => $request->password,
            'id_tipe_user' => $request->id_tipe_user
        ]);
        return redirect('/menu_userpengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id_user',$id)->delete();
        return redirect('/menu_userpengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
}
