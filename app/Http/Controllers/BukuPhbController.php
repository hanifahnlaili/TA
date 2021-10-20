<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \PDF;


class BukuPhbController extends Controller
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
  

    public function phbkls3sunflo()
    {
        $buku_penghubung = DB::table('buku_penghubung')
        ->select('buku_penghubung.*','siswa.nama_siswa')
        ->join('detail_siswa','detail_siswa.nomor_induk','=','buku_penghubung.nomor_induk')
        ->join('siswa','siswa.nomor_induk','=','detail_siswa.nomor_induk')
        ->get();
        $siswa = DB::table('siswa')->select('*')->get();
        $detail_siswa = DB::table('detail_siswa')->select('*')->get();

        return view('menu_bukuphb3sunflo',compact('buku_penghubung','siswa','detail_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku_penghubung = DB::table('buku_penghubung')->get();
        $siswa = DB::table('siswa')->get();
        $kelas = DB::table('kelas')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        $bulan = DB::table('bulan')->get();
        return view('addbuku_penghubung3sunflo',['buku_penghubung'=>$buku_penghubung,'siswa'=>$siswa,'bulan'=>$bulan,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('buku_penghubung')->insert(array(
            'nomor_induk' => $request->input('nomor_induk'),
            'guru_spiritual' => $request->input('guru_spiritual'),
            'guru_sosial' => $request->input('guru_sosial'),
            'ortu_spiritual' => $request->input('ortu_spiritual'),
            'ortu_sosial' => $request->input('ortu_sosial'),
            'id_tapel' => $request->input('id_tapel')
        ));
        return redirect('/menu_buku_penghubung3sunflo');
    }

    public function cetakpdf()
    {
        $kelastiga = DB::table('buku_penghubung')
            ->select('buku_penghubung.*', 'siswa.nama_siswa', 'kelas.nama_kelas', 'tahun_pelajaran.tapel', 'tahun_pelajaran.semester', 'bulan.nama_bulan')
            ->join('detail_siswa', 'buku_penghubung.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'buku_penghubung.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'buku_penghubung.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('bulan', 'tahun_pelajaran.id_bulan', '=', 'bulan.id_bulan')           
            ->where('detail_siswa.id_kelas', '=', 'KLS303')
            ->get();
        $pdf = PDF::loadView('/cetakbuku_penghubung3sunflo', ['buku_penghubung' => $kelastiga]);
        $pdf->setPaper("f4");
        return $pdf->stream();
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
        $kelastiga = DB::table('buku_penghubung')
            ->where('id_nbp', '=', $id)
            ->select('buku_penghubung.*', 'siswa.nama_siswa', 'kelas.nama_kelas', 'tahun_pelajaran.tapel', 'tahun_pelajaran.semester', 'bulan.nama_bulan')
            ->join('detail_siswa', 'buku_penghubung.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'buku_penghubung.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'buku_penghubung.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('bulan', 'tahun_pelajaran.id_bulan', '=', 'bulan.id_bulan')           
            ->where('detail_siswa.id_kelas', '=', 'KLS303')
            ->get();
        $kelas = DB::table('kelas')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        $bulan = DB::table('bulan')->get();
        $siswa = DB::table('siswa')->get();
        return view('editbuku_penghubung3sunflo',['buku_penghubung'=>$kelastiga,'siswa'=>$siswa,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran, 'bulan'=>$bulan]);

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
        DB::table('buku_penghubung')
            ->where('id_nbp', $request->id_nbp)
            ->update([
                'guru_spiritual' => $request->guru_spiritual,
                'guru_sosial' => $request->guru_sosial,
                'ortu_spiritual' => $request->ortu_spiritual,
                'ortu_sosial' => $request->ortu_sosial
        ]);
        return redirect('/menu_buku_penghubung3sunflo');
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
