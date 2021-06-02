<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \PDF;

class KBMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kbm = DB::table('kbm')
            ->select('kbm.*', 'matapelajaran.nama_mapel')
            ->join('matapelajaran', 'matapelajaran.id_mapel', '=', 'kbm.id_mapel')
            // ->join('detail_siswa', 'detail_siswa.id_kelas', '=', 'kelas.id_kelas')
            // ->join('detail_mapel', 'detail_mapel.nomor_induk', '=', 'detail_siswa.nomor_induk')
            // ->join('kelas', 'kelas.id_kelas', '=', 'kbm.id_kelas')
            // ->where('kelas.id_kelas', '=', 'KLS303')
            ->get();
        $detail_mapel = DB::table('detail_mapel')->get();
        $detail_siswa = DB::table('detail_siswa')->get();
        $mapel = DB::table('matapelajaran')->get();
        $kelas = DB::table('kelas')->get();
        return view('menu_kbmkls3',['kbm'=>$kbm,'kelas'=>$kelas,'matapelajaran'=>$mapel,'detail_siswa'=>$detail_siswa,'detail_mapel'=>$detail_mapel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kbm = DB::table('kbm')
            ->where('kbm.id_kbm', '=', $id)
            ->select('kbm.*', 'matapelajaran.nama_mapel')
            ->join('matapelajaran', 'matapelajaran.id_mapel', '=', 'kbm.id_mapel')
            ->get();
        $mapel = DB::table('matapelajaran')->get();
        $kelas = DB::table('kelas')->get();
        return view('editkbmkls3',['kbm'=>$kbm,'kelas'=>$kelas,'matapelajaran'=>$mapel]);
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
        DB::table('kbm')
            ->where('id_kbm', $request->id_kbm)
            ->update([
                'nilai_kbm' => $request->nilai_kbm
        ]);
        return redirect('/menu_kbmkls3');
    }

    public function cetakpdf()
    {
        $kbm = DB::table('kbm')
            ->select('kbm.*', 'matapelajaran.nama_mapel')
            ->join('matapelajaran', 'matapelajaran.id_mapel', '=', 'kbm.id_mapel')
            ->get();
        $pdf = PDF::loadView('/cetakkbmkls3', ['kbm' => $kbm]);
        $pdf->setPaper('f4');
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
