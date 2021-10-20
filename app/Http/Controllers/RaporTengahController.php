<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class RaporTengahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function raportengah()
    {
        $raportengah = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nomor_induk','siswa.nama_siswa','kompetensi_dasar.id_kd','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','range_nilai.range_huruf','range_nilai.id_range_nilai','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            // ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            // ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            // ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->where('mata_pelajaran.id_matapelajaran','MPL001')
            ->get();

            $raportengah1 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nomor_induk','siswa.nama_siswa','kompetensi_dasar.id_kd','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','range_nilai.range_huruf','range_nilai.id_range_nilai','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            // ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            // ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            // ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->where('mata_pelajaran.id_matapelajaran','MPL002')
            ->get();

            $raportengah2 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nomor_induk','siswa.nama_siswa','kompetensi_dasar.id_kd','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','range_nilai.range_huruf','range_nilai.id_range_nilai','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            // ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            // ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            // ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->where('mata_pelajaran.id_matapelajaran','MPL003')
            ->get();

        $raportengah3 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nomor_induk','siswa.nama_siswa','kompetensi_dasar.id_kd','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','range_nilai.range_huruf','range_nilai.id_range_nilai','range_nilai.keterangan')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            // ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            // ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            // ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
            ->where('mata_pelajaran.id_matapelajaran','MPL006')
            ->get();
        $siswa = DB::table('siswa')->select('nomor_induk','nama_siswa')->get();
        $kd = DB::table('kompetensi_dasar')->select('id_kd','detail_kd')->get();
        $mapel = DB::table('mata_pelajaran')->select('id_matapelajaran','nama_matapelajaran')->get();
        $tapel = DB::table('tahun_pelajaran')->select('id_tahunpelajaran','tahunpelajaran')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $range_nilai = DB::table('range_nilai')->select('id_range_nilai','range_huruf')->get();
        $matapel = DB::table('mata_pelajaran')->get('id_matapelajaran');

        // dd($raportengah3);
        

        return view('menu_raportengah', compact('raportengah','raportengah1','raportengah2','raportengah3','siswa','kd','mapel','tapel','detail_siswa','kelas','matapel'));
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
        $siswa = DB::table('siswa')
        ->where([
            'nomor_induk' => $request->nomor_induk
        ])->first();

        // dd($siswa);

        $kd = DB::table('kompetensi_dasar')
        ->where([
            'id_kd' => $request->id_kd
        ])->first();

        $range_nilai = DB::table('range_nilai')
        ->where([
            'id_range_nilai' => $request->id_range_nilai
        ])->first();

        DB::table('komponen_nilai_tengah')
        ->insert([
            'nomor_induk' => $siswa->NOMOR_INDUK,
            'id_kd' => $kd->ID_KD,
            // 'id_range_nilai' => $range_nilai->ID_RANGE_NILAI,
            'nilai_harian1' => $request->nilai_harian1,
            'nilai_harian2' => $request->nilai_harian2,
            'nilai_PTS' => $request->nilai_PTS
        ]);

        return redirect('/menu_raportengah')->with('alert', 'Data Nilai Rapor Tengah Semester Berhasil Disimpan.');
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
