<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \PDF;


class PenilaianController extends Controller
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
    public function penilaian()
    {
        $presensi = DB::table('presensi')
            ->select('presensi.*','siswa.nama_siswa')
            ->join('detail_siswa', 'presensi.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->get();
        $kepribadian = DB::table('kepribadian')
            ->select('kepribadian.*','siswa.nama_siswa')
            ->join('detail_siswa', 'kepribadian.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->get();
        $ekstrakurikuler = DB::table('ekstrakurikuler')
            ->select('ekstrakurikuler.*','siswa.nama_siswa')
            ->join('detail_siswa', 'ekstrakurikuler.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->get();
        $kondisi_kesehatan = DB::table('kondisi_kesehatan')
            ->select('kondisi_kesehatan.*','siswa.nama_siswa')
            ->join('detail_siswa', 'kondisi_kesehatan.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->get();
        $perkembangan_fisik = DB::table('perkembangan_fisik')
            ->select('perkembangan_fisik.*','siswa.nama_siswa')
            ->join('detail_siswa', 'perkembangan_fisik.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->get();
        $prestasi = DB::table('prestasi')
            ->select('prestasi.*','siswa.nama_siswa')
            ->join('detail_siswa', 'prestasi.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->get();
        $siswa = DB::table('siswa')->get();
        return view('menu_penilaian',compact('presensi','kepribadian','ekstrakurikuler','kondisi_kesehatan','perkembangan_fisik','prestasi','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelastiga = DB::table('siswa')->get();
        $detailsiswa = DB::table('detail_siswa')->get();
        $kelas = DB::table('kelas')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        $presensi = DB::table('presensi')->get();
        return view('addprn3sunflo',['presensi'=>$presensi,'siswa'=>$kelastiga,'detail_siswa'=>$detailsiswa,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('presensi')->insert(array(
            'sakit' => $request->input('sakit'),
            'ijin' => $request->input('ijin'),
            'absen' => $request->input('absen'),
            'nomor_induk' => $request->input('nomor_induk'),
            'id_tapel' => $request->input('id_tapel')
        ));
        return redirect('/menu_presensi3sunflo');
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presensi = DB::table('presensi')
            ->where('presensi.id_presensi', '=', $id)
            ->select('presensi.*','siswa.nama_siswa','tahun_pelajaran.tapel', 'tahun_pelajaran.semester', 'bulan.nama_bulan')
            ->join('detail_siswa', 'presensi.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('tahun_pelajaran', 'detail_siswa.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('bulan', 'bulan.id_bulan', '=', 'tahun_pelajaran.id_bulan')
            ->get();
        $siswa = DB::table('siswa')->get();
        $kelas = DB::table('kelas')->get();
        $bulan = DB::table('bulan')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        return view('editprn3sunflo',['bulan'=>$bulan,'presensi'=>$presensi,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran,'siswa'=>$siswa]);
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
        DB::table('presensi')
            ->where('id_presensi', $request->id_presensi)
            ->update([
                'sakit' => $request->sakit,
                'ijin' => $request->ijin,
                'absen' => $request->absen,
                'id_tapel' => $request->id_tapel
        ]);
        return redirect('/menu_presensi3sunflo');
    }

    public function cetakpdf()
    {
        $presensi = DB::table('presensi')
            ->select('presensi.*','siswa.nama_siswa','tahun_pelajaran.tapel','tahun_pelajaran.semester')
            ->join('detail_siswa', 'presensi.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('tahun_pelajaran', 'detail_siswa.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('bulan', 'bulan.id_bulan', '=', 'tahun_pelajaran.id_bulan')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->where('kelas.id_kelas', '=', 'KLS303')
            ->get();
        $pdf = PDF::loadView('/cetakprn3sunflo', ['presensi' => $presensi]);
        $pdf->setPaper("f4");
        return $pdf->stream();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('presensi')->where('id_presensi',$id)
        ->delete();
        return redirect('/menu_presensi3sunflo');
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
