<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RaporAkhirController extends Controller
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
    public function raporakhir()
    {
        $raporakhir = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nomor_induk','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki','detail_siswa.catatan','komponen_nilai_tengah.nilai_PTS')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah','komponen_nilai_tengah.nomor_induk','siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL001')
            ->get();
        $siswa = DB::table('siswa')->select('nomor_induk','nama_siswa')->get();
        $ki = DB::table('kompetensi_inti')->select('id_ki')->get();
        $mapel = DB::table('mata_pelajaran')->select('id_matapelajaran','nama_matapelajaran')->get();
        $tapel = DB::table('tahun_pelajaran')->select('*')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $detail_kelas = DB::table('detail_kelas')->get();

        $raporakhir1 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL002')
            ->get();

        $raporakhir2 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL003')
            ->get();

        $raporakhir3 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL004')
            ->get();

        $raporakhir4 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL005')
            ->get();

        $raporakhir5 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL006')
            ->get();

        $raporakhir6 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL007')
            ->get();

        $raporakhir7 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL008')
            ->get();

        $raporakhir8 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL009')
            ->get();

        $raporakhir9 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL010')
            ->get();

        $raporakhir10 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL011')
            ->get();

        $raporakhir11 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL012')
            ->get();

        $raporakhir12 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL013')
            ->get();

        $raporakhir13 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('detail_kelas','detail_kelas.id_matapelajaran','mata_pelajaran.id_matapelajaran')
            ->join('kelas','kelas.id_kelas','detail_kelas.id_kelas')
            ->join('detail_siswa','detail_siswa.id_kelas','kelas.id_kelas')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','detail_siswa.id_tahunpelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL014')
            ->get();
        return view('menu_raporakhir', compact('raporakhir','raporakhir1','raporakhir2','raporakhir3','raporakhir4','raporakhir5','raporakhir6','raporakhir7','raporakhir8','raporakhir9','raporakhir10','raporakhir11','raporakhir12','raporakhir13','siswa','ki','mapel','tapel','detail_siswa','kelas','detail_kelas'));
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
        $nomor_induk = DB::table('siswa')
        ->where([
            'nomor_induk' => $request->nomor_induk
        ])->first();

        // dd($nomor_induk);

        $id_ki = DB::table('kompetensi_inti')
        ->where([
            'id_ki' => $request->id_ki
        ])->first();

        $id_matapelajaran = DB::table('mata_pelajaran')->where([
            'id_matapelajaran' => 'MPL001'
        ])->first();

        DB::table('komponen_nilai_akhir')
        ->insert([
            'nomor_induk' => $nomor_induk->NOMOR_INDUK,
            'id_ki' => $id_ki->ID_KI,
            'id_matapelajaran' => $id_matapelajaran->ID_MATAPELAJARAN,
            'nilai_harian3' => $request->nilai_harian3,
            'nilai_harian4' => $request->nilai_harian4,
            'nilai_PAS' => $request->nilai_PAS,
            'deskripsi' => $request->deskripsi
        ]);

        // dd($request);

        return redirect('/menu_raporakhir')->with('alert', 'Data Nilai Rapor Akhir Semester Berhasil Disimpan.');
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
