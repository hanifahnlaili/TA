<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RaporAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function raporakhir()
    {
        $raporakhir = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->get();
        $siswa = DB::table('siswa')->select('*')->get();
        $ki = DB::table('kompetensi_inti')->select('*')->get();
        $mapel = DB::table('mata_pelajaran')->select('*')->get();
        $tapel = DB::table('tahun_pelajaran')->select('*')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $detail_kelas = DB::table('detail_kelas')->get();
        return view('menu_raporakhir', compact('raporakhir','siswa','ki','mapel','tapel','detail_siswa','kelas','detail_kelas'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
