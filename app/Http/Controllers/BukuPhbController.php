<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \PDF;


class BukuPhbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phbkls3sunflo()
    {
        $kelastiga = DB::table('bukuphb')
            ->select('bukuphb.*', 'siswa.nama_siswa', 'kelas.nama_kelas', 'tahun_pelajaran.tapel', 'tahun_pelajaran.semester', 'bulan.nama_bulan')
            ->join('detail_siswa', 'bukuphb.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'bukuphb.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'bukuphb.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('bulan', 'tahun_pelajaran.id_bulan', '=', 'bulan.id_bulan')           
            ->where('detail_siswa.id_kelas', '=', 'KLS303')
            ->get();
        $avgspiritual = DB::table('bukuphb')->avg('bukuphb.guru_spiritual','bukuphb.ortu_spiritual');
        $avgspiritual = round($avgspiritual);
        $avgsosial = DB::table('bukuphb')->avg('bukuphb.guru_sosial','bukuphb.ortu_sosial');
        $avgsosial = round($avgsosial);
        $kelas = DB::table('kelas')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        $bulan = DB::table('bulan')->get();
        $siswa = DB::table('siswa')->get();
        return view('menu_bukuphb3sunflo',['bukuphb'=>$kelastiga,'siswa'=>$siswa,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran, 'bulan'=>$bulan,'avgspiritual'=>$avgspiritual,'avgsosial'=>$avgsosial]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bukuphb = DB::table('bukuphb')->get();
        $siswa = DB::table('siswa')->get();
        $kelas = DB::table('kelas')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        $bulan = DB::table('bulan')->get();
        return view('addbukuphb3sunflo',['bukuphb'=>$bukuphb,'siswa'=>$siswa,'bulan'=>$bulan,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('bukuphb')->insert(array(
            'nomor_induk' => $request->input('nomor_induk'),
            'guru_spiritual' => $request->input('guru_spiritual'),
            'guru_sosial' => $request->input('guru_sosial'),
            'ortu_spiritual' => $request->input('ortu_spiritual'),
            'ortu_sosial' => $request->input('ortu_sosial'),
            'id_tapel' => $request->input('id_tapel')
        ));
        return redirect('/menu_bukuphb3sunflo');
    }

    public function cetakpdf()
    {
        $kelastiga = DB::table('bukuphb')
            ->select('bukuphb.*', 'siswa.nama_siswa', 'kelas.nama_kelas', 'tahun_pelajaran.tapel', 'tahun_pelajaran.semester', 'bulan.nama_bulan')
            ->join('detail_siswa', 'bukuphb.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'bukuphb.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'bukuphb.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('bulan', 'tahun_pelajaran.id_bulan', '=', 'bulan.id_bulan')           
            ->where('detail_siswa.id_kelas', '=', 'KLS303')
            ->get();
        $pdf = PDF::loadView('/cetakbukuphb3sunflo', ['bukuphb' => $kelastiga]);
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
        $kelastiga = DB::table('bukuphb')
            ->where('id_nbp', '=', $id)
            ->select('bukuphb.*', 'siswa.nama_siswa', 'kelas.nama_kelas', 'tahun_pelajaran.tapel', 'tahun_pelajaran.semester', 'bulan.nama_bulan')
            ->join('detail_siswa', 'bukuphb.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('siswa', 'siswa.nomor_induk', '=', 'bukuphb.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'bukuphb.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->join('bulan', 'tahun_pelajaran.id_bulan', '=', 'bulan.id_bulan')           
            ->where('detail_siswa.id_kelas', '=', 'KLS303')
            ->get();
        $kelas = DB::table('kelas')->get();
        $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        $bulan = DB::table('bulan')->get();
        $siswa = DB::table('siswa')->get();
        return view('editbukuphb3sunflo',['bukuphb'=>$kelastiga,'siswa'=>$siswa,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran, 'bulan'=>$bulan]);

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
        DB::table('bukuphb')
            ->where('id_nbp', $request->id_nbp)
            ->update([
                'guru_spiritual' => $request->guru_spiritual,
                'guru_sosial' => $request->guru_sosial,
                'ortu_spiritual' => $request->ortu_spiritual,
                'ortu_sosial' => $request->ortu_sosial
        ]);
        return redirect('/menu_bukuphb3sunflo');
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
