<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class RaporTengahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function raportengah()
    {
        $raportengah = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL001')
            ->get();
        $siswa = DB::table('siswa')->select('*')->get();
        $kd = DB::table('kompetensi_dasar')->select('*')->get();
        $mapel = DB::table('mata_pelajaran')->select('*')->get();
        $tapel = DB::table('tahun_pelajaran')->select('*')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $rangenilai = DB::table('range_nilai')->select('*')->get();
        $matapel = DB::table('mata_pelajaran')->get('id_matapelajaran');
        // $nihar1 = DB::table('komponen');
        
        $raportengah1 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL002')
            ->get();

            $raportengah2 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL003')
            ->get();

            $raportengah3 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL004')
            ->get();

            $raportengah4 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL005')
            ->get();

            $raportengah5 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL006')
            ->get();

            $raportengah6 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL007')
            ->get();

            $raportengah7 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL008')
            ->get();

            $raportengah8 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL009')
            ->get();

            $raportengah9 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL010')
            ->get();

            $raportengah10 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL011')
            ->get();

            $raportengah11 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL012')
            ->get();

            $raportengah12 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL013')
            ->get();

            $raportengah13 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL014')
            ->get();

        return view('menu_raportengah', compact('raportengah','raportengah1','raportengah2','raportengah3','raportengah4','raportengah5','raportengah6','raportengah7','raportengah8','raportengah9','raportengah10','raportengah11','raportengah12','raportengah13','siswa','kd','mapel','tapel','detail_siswa','kelas','matapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $komponen = DB::table('komponen_nilai_tengah')->select('*')->get();
        $siswa = DB::table('siswa')->select('*')->get();
        $kd = DB::table('kompetensi_dasar')->select('*')->get();
        $mapel = DB::table('mata_pelajaran')->select('*')->get();
        $tapel = DB::table('tahun_pelajaran')->select('*')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $rangenilai = DB::table('range_nilai')->select('*')->get();
        $matapel = DB::table('mata_pelajaran')->get('id_matapelajaran');
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
