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
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL001')
            ->get();
        $raporakhira = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL001')
            ->get();
        
        $raporakhir1 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL002')
            ->get();
        $raporakhir1a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL002')
            ->get();

        $raporakhir2 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL003')
            ->get();
        $raporakhir2a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL003')
            ->get();

        $raporakhir3 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL004')
            ->get();
        $raporakhir3a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL004')
            ->get();

        $raporakhir4 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL005')
            ->get();
        $raporakhir4a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL005')
            ->get();

        $raporakhir5 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL006')
            ->get();
        $raporakhir5a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL006')
            ->get();
            // dd($raporakhir5, $raporakhir5a);

        $raporakhir6 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL007')
            ->get();
        $raporakhir6a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL007')
            ->get();

        $raporakhir7 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL008')
            ->get();
        $raporakhir7a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL008')
            ->get();

        $raporakhir8 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL009')
            ->get();
        $raporakhir8a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL009')
            ->get();

        $raporakhir9 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL010')
            ->get();
        $raporakhir9a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL010')
            ->get();

        $raporakhir10 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL011')
            ->get();
        $raporakhir10a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL011')
            ->get();

        $raporakhir11 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL012')
            ->get();
        $raporakhir11a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL012')
            ->get();

        $raporakhir12 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL013')
            ->get();
        $raporakhir12a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL013')
            ->get();

        $raporakhir13 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL014')
            ->get();
        $raporakhir13a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL014')
            ->get();

        $raporakhir14 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL015')
            ->get();
        $raporakhir14a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL015')
            ->get();

        $raporakhir15 = DB::table('komponen_nilai_akhir')
            ->select('komponen_nilai_akhir.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_inti.id_ki', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen')
            ->groupBy('komponen_nilai_akhir.id_komponen')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_akhir.nomor_induk')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','komponen_nilai_akhir.id_matapelajaran')
            ->join('kompetensi_inti','kompetensi_inti.id_ki','komponen_nilai_akhir.id_ki')
            ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL016')
            ->get();
        $raporakhir15a = DB::table('komponen_nilai_tengah')
            ->select('komponen_nilai_tengah.*','siswa.nama_siswa','mata_pelajaran.nama_matapelajaran','mata_pelajaran.nilai_kbm','kompetensi_dasar.id_kd', 'komponen_nilai_tengah.nilai_harian1', 'komponen_nilai_tengah.nilai_harian2', 'komponen_nilai_tengah.nilai_pts', 'komponen_nilai_tengah.id_komponen', 'mata_pelajaran.id_matapelajaran')
            ->join('siswa','siswa.nomor_induk','komponen_nilai_tengah.nomor_induk')
            ->join('kompetensi_dasar', 'kompetensi_dasar.id_kd', 'komponen_nilai_tengah.id_kd')
            ->join('mata_pelajaran','mata_pelajaran.id_matapelajaran','kompetensi_dasar.id_matapelajaran')
            ->where('mata_pelajaran.id_matapelajaran','=','MPL016')
            ->get();

        $siswa = DB::table('siswa')->select('*')
        ->join('komponen_nilai_tengah', 'komponen_nilai_tengah.nomor_induk', 'siswa.nomor_induk')
        ->groupBy('komponen_nilai_tengah.nomor_induk')
        ->get();
        $ki = DB::table('kompetensi_inti')->select('*')->get();
        // dd($ki);
        $mapel = DB::table('mata_pelajaran')->select('*')->get();
        $tapel = DB::table('tahun_pelajaran')->select('*')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();
        $kelas = DB::table('kelas')->select('*')->get();
        $detail_kelas = DB::table('detail_kelas')->get();
        return view('menu_raporakhir', compact('raporakhir','raporakhir1','raporakhir2','raporakhir3','raporakhir4','raporakhir5','raporakhir6','raporakhir7','raporakhir8','raporakhir9','raporakhir10','raporakhir11','raporakhir12','raporakhir13','raporakhir14','raporakhir15',
        'raporakhira','raporakhir1a','raporakhir2a','raporakhir3a','raporakhir4a','raporakhir5a','raporakhir6a','raporakhir7a','raporakhir8a','raporakhir9a','raporakhir10a','raporakhir11a','raporakhir12a','raporakhir13a','raporakhir14a','raporakhir15a','siswa','ki','mapel','tapel','detail_siswa','kelas','detail_kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_ki3(Request $request, $id)
    {
        DB::table('komponen_nilai_akhir')->where('ID_KOMPONEN', $id)->update([
            'NILAI_HARIAN3' => $request->nilai3,
            'NILAI_HARIAN4' => $request->nilai4,
            'NILAI_PAS' => $request->pas,
            'DESKRIPSI' => $request->ket
        ]);
        return back();   
    }

    public function edit_ki4(Request $request, $id)
    {
        DB::table('komponen_nilai_akhir')->where('ID_KOMPONEN', $id)->update([
            'NILAI_HARIAN3' => $request->nilai3,
            'NILAI_HARIAN4' => $request->nilai4,
            'NILAI_PAS' => $request->pas,
            'DESKRIPSI' => $request->ket
        ]);
        return back();   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_ki3(Request $request, $id)
    {
        // dd($id);
        DB::table('komponen_nilai_akhir')->insert([
            'NOMOR_INDUK' => $request->nama,
            'ID_MATAPELAJARAN' => $id,
            'ID_KI' => 'KI - 3',
            'NILAI_HARIAN3' => $request->nilai3,
            'NILAI_HARIAN4' => $request->nilai4,
            'NILAI_PAS' => $request->pas,
            'DESKRIPSI' => $request->ket
        ]);
        return back();
    }

    public function store_ki4(Request $request, $id)
    {
        // dd($id);
        DB::table('komponen_nilai_akhir')->insert([
            'NOMOR_INDUK' => $request->nama,
            'ID_MATAPELAJARAN' => $id,
            'ID_KI' => 'KI - 4',
            'NILAI_HARIAN3' => $request->nilai3,
            'NILAI_HARIAN4' => $request->nilai4,
            'NILAI_PAS' => $request->pas,
            'DESKRIPSI' => $request->ket
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
