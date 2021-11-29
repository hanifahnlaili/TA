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
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL001')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();
        // dd($raportengah);
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
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL002')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah2 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL003')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah3 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL004')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();
            // dd($raportengah3);

            $raportengah4 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL005')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah5 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL006')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();
            // $raportengah5a = DB::table('komponen_nilai_tengah')
            // ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            // ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            // ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            // ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            // ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            // ->where('mata_pelajaran.id_matapelajaran','=','MPL006')
            // ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            // ->get();
            // dd($raportengah5);

            $raportengah6 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL007')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah7 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL008')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah8 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL009')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah9 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL010')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah10 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL011')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah11 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL012')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah12 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL013')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();
        $siswa = DB::table('siswa')->select('nomor_induk','nama_siswa')->get();
        $kd = DB::table('kompetensi_dasar')->select('id_kd','detail_kd')->get();
        $mapel = DB::table('mata_pelajaran')->select('id_matapelajaran','nama_matapelajaran')->get();
        $tapel = DB::table('tahun_pelajaran')->select('id_tahunpelajaran','tahunpelajaran')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $range_nilai = DB::table('range_nilai')->select('id_range_nilai','range_huruf')->get();
        $matapel = DB::table('mata_pelajaran')->get('id_matapelajaran');

            $raportengah13 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL014')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah14 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL015')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

            $raportengah15 = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
            ->groupBy('siswa.nomor_induk')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL016')
            ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
            ->get();

        return view('menu_raportengah', compact('raportengah','raportengah1','raportengah2','raportengah3','raportengah4','raportengah5','raportengah6','raportengah7','raportengah8','raportengah9','raportengah10','raportengah11','raportengah12','raportengah13', 'raportengah14', 'raportengah15', 'siswa','kd','mapel','tapel','detail_siswa','kelas','matapel', 'rangenilai'));
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

        if($request->nilai2 != null){
            if( $request->nilai1 >= 93 && $request->nilai1 <= 100 ){
                $range1 = 'RGN001';
            }elseif( $request->nilai1 >= 84 && $request->nilai1 <= 92 ){
                $range1 = 'RGN002';
            }elseif( $request->nilai1 >= 75 && $request->nilai1 <= 83 ){
                $range1 = 'RGN003';
            }else{
                $range1 = 'RGN003';
            }

            if( $request->nilai2 >= 93 && $request->nilai2 <= 100 ){
                $range2 = 'RGN001';
            }elseif( $request->nilai2 >= 84 && $request->nilai2 <= 92 ){
                $range2 = 'RGN002';
            }elseif( $request->nilai2 >= 75 && $request->nilai2 <= 83 ){
                $range2 = 'RGN003';
            }else{
                $range2 = 'RGN003';
            }
            
        }else{
            if( $request->nilai1 >= 93 && $request->nilai1 <= 100 ){
                $range1 = 'RGN001';
            }elseif( $request->nilai1 >= 84 && $request->nilai1 <= 92 ){
                $range1 = 'RGN002';
            }elseif( $request->nilai1 >= 75 && $request->nilai1 <= 83 ){
                $range1 = 'RGN003';
            }else{
                $range1 = 'RGN003';
            }
            
            $range2 = null;
        }

        // dd($range1, $range2);

        DB::table('komponen_nilai_tengah')->insert([
            'NOMOR_INDUK' => $request->nama,
            'ID_KD' => $request->kd1,
            'ID_RANGE_NILAI' => $range1,
            'NILAI_HARIAN1' => $request->nilai1,
            'NILAI_HARIAN2' => $request->nilai2,
            'NILAI_PTS' => $request->pts
        ]);

        DB::table('komponen_nilai_tengah')->insert([
            'NOMOR_INDUK' => $request->nama,
            'ID_KD' => $request->kd2,
            'ID_RANGE_NILAI' => $range2,
            'NILAI_HARIAN1' => $request->nilai1,
            'NILAI_HARIAN2' => $request->nilai2,
            'NILAI_PTS' => $request->pts
        ]);

        return back();
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
    public function edit($id, $id2)
    {
        $rapor = DB::table('komponen_nilai_tengah')
        ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS')
        // ->groupBy('komponen_nilai_tengah.NOMOR_INDUK')
        ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
        ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
        ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
        // ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
        // ->join('detail_siswa','detail_siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
        // ->join('kelas','kelas.id_kelas','detail_siswa.id_kelas')
        // ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
        ->where('mata_pelajaran.id_matapelajaran','=',$id2)
        ->where('komponen_nilai_tengah.NOMOR_INDUK', '=', $id)
        ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
        ->get();

        // dd($rapor);
        $kd = DB::table('kompetensi_dasar')->select('*')->get();
        $rangenilai = DB::table('range_nilai')->select('*')->get();

        // dd(count($rapor));
        return view('/editraportengah', compact('rapor', 'kd', 'rangenilai', 'id2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id2)
    {
        if($request->nilai2 != null){
            if( $request->nilai1 >= 93 && $request->nilai1 <= 100 ){
                $range1 = 'RGN001';
            }elseif( $request->nilai1 >= 84 && $request->nilai1 <= 92 ){
                $range1 = 'RGN002';
            }elseif( $request->nilai1 >= 75 && $request->nilai1 <= 83 ){
                $range1 = 'RGN003';
            }else{
                $range1 = 'RGN003';
            }

            if( $request->nilai2 >= 93 && $request->nilai2 <= 100 ){
                $range2 = 'RGN001';
            }elseif( $request->nilai2 >= 84 && $request->nilai2 <= 92 ){
                $range2 = 'RGN002';
            }elseif( $request->nilai2 >= 75 && $request->nilai2 <= 83 ){
                $range2 = 'RGN003';
            }else{
                $range2 = 'RGN003';
            }
            
        }else{
            if( $request->nilai1 >= 93 && $request->nilai1 <= 100 ){
                $range1 = 'RGN001';
            }elseif( $request->nilai1 >= 84 && $request->nilai1 <= 92 ){
                $range1 = 'RGN002';
            }elseif( $request->nilai1 >= 75 && $request->nilai1 <= 83 ){
                $range1 = 'RGN003';
            }else{
                $range1 = 'RGN003';
            }
            
            $range2 = null;
        }

        // dd($range1, $range2);

        $cek1 = DB::table('komponen_nilai_tengah')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=',$id2)
            ->where('nomor_induk', $id)
            ->MIN('ID_KOMPONEN');

        $cek2 = DB::table('komponen_nilai_tengah')
            ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=',$id2)
            ->where('nomor_induk', $id)
            ->MAX('ID_KOMPONEN');
            // dd($cek1, $cek2);

        DB::table('komponen_nilai_tengah')->where('ID_KOMPONEN', $cek1)->update([
            'ID_KD' => $request->kd1,
            'ID_RANGE_NILAI' => $range1,
            'NILAI_HARIAN1' => $request->nilai1,
            'NILAI_HARIAN2' => $request->nilai2,
            'NILAI_PTS' => $request->pts
        ]);

        DB::table('komponen_nilai_tengah')->where('ID_KOMPONEN', $cek2)->update([
            'ID_KD' => $request->kd2,
            'ID_RANGE_NILAI' => $range2,
            'NILAI_HARIAN1' => $request->nilai1,
            'NILAI_HARIAN2' => $request->nilai2,
            'NILAI_PTS' => $request->pts
        ]);
        return redirect('/menu_raportengah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id, $id2)
    {
        $detail = DB::table('komponen_nilai_tengah')
        ->select('komponen_nilai_tengah.*','komponen_nilai_tengah.id_komponen','komponen_nilai_tengah.id_kd','siswa.nama_siswa','siswa.nomor_induk','kompetensi_dasar.nama_kd','kompetensi_dasar.detail_kd','mata_pelajaran.id_matapelajaran','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','komponen_nilai_tengah.nilai_harian1','komponen_nilai_tengah.nilai_harian2','komponen_nilai_tengah.nilai_PTS','range_nilai.range_huruf','range_nilai.keterangan')
        ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
        ->join('kompetensi_dasar','kompetensi_dasar.id_kd','komponen_nilai_tengah.id_kd')
        ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
        ->join('range_nilai','range_nilai.id_range_nilai','komponen_nilai_tengah.id_range_nilai')
        ->where('mata_pelajaran.id_matapelajaran','=', $id2)
        ->orderBy('komponen_nilai_tengah.ID_KOMPONEN', 'ASC')
        ->where('komponen_nilai_tengah.NOMOR_INDUK', '=', $id)
        ->get();
        // dd($detail);
        return view('/detailraportengah', compact('detail'));

    }
}
