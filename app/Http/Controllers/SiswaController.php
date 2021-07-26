<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \PDF;

class SiswaController extends Controller
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

    public function kelastigasunflower()
    {
        // $kelastiga = DB::table('siswa')
        //     ->select('siswa.*', 'kelas.nama_kelas', 'tahun_pelajaran.tahunpelajaran', 'tahun_pelajaran.semester')
        //     ->join('detail_siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
        //     ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
        //     ->join('tahun_pelajaran', 'detail_siswa.id_tahunpelajaran', '=', 'tahun_pelajaran.id_tahunpelajaran')
        //     ->get();
        $siswa = DB::table('siswa')
        ->select('siswa.NOMOR_INDUK','siswa.NISN_SISWA','siswa.NAMA_SISWA','siswa.ALAMAT','siswa.TELEPON','siswa.DITERIMA_DIKELAS','siswa.TANGGAL_DITERIMA_DIKELAS','siswa.FOTO')
        ->join('wali_murid','siswa.ID_ORTU', '=', 'wali_murid.ID_ORTU')
        ->join('sekolah_asal', 'sekolah_asal.ID_SEKOLAH','=','siswa.ID_SEKOLAH')
        ->get();

        // dd($siswa);
        // $ortu = DB::table('wali_murid')->select('*')->get();
        // $sekolah_asal = DB::table('sekolah_asal')->select('*')->get();
        // $kelas = DB::table('kelas')->get();
        // $tahun_pelajaran = DB::table('tahun_pelajaran')->get();
        return view('menu_siswa3sunflo',['siswa'=>$siswa]);
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
        return view('addsiswakls3sunflo',['siswa'=>$kelastiga,'detail_siswa'=>$detailsiswa,'kelas'=>$kelas,'tahun_pelajaran'=>$tahun_pelajaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('siswa')->insert(array(
            'nomor_induk' => $request->input('nomor_induk'),
            'nama_siswa' => $request->input('nama_siswa'),
            'nisn_siswa' => $request->input('nisn_siswa')
        ));
        DB::table('detail_siswa')->insert([
            'id_kelas' => $request->id_kelas,
            'id_tapel' => $request->id_tapel,
            'nomor_induk' =>$request->nomor_induk
        ]);
        return redirect('/menu_siswakls3sunflo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelastiga=DB::table('siswa')
            ->where('siswa.nomor_induk','=',$id)
            ->select('siswa.*','kelas.nama_kelas','tahun_pelajaran.tapel', 'tahun_pelajaran.semester')
            ->join('detail_siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'tahun_pelajaran.id_tapel', '=', 'detail_siswa.id_tapel')
            ->get();
        $kelas=DB::table('kelas')->get();
        $tahun_pelajaran=DB::table('tahun_pelajaran')->get();
        return view('editsiswakls3sunflo',['siswa' => $kelastiga, 'kelas' => $kelas, 'tahun_pelajaran' => $tahun_pelajaran]);
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
        //dd($request->all());
        DB::table('detail_siswa')
            ->where('nomor_induk', $request->nomor_induk)
            ->update([
                'id_kelas' => $request->id_kelas,
                'id_tapel' => $request->id_tapel
        ]);
        return redirect('/menu_siswakls3sunflo');
    }

    public function cetakpdf()
    {
        $siswa = DB::table('siswa')
            ->select('siswa.*', 'kelas.nama_kelas', 'tahun_pelajaran.tapel', 'tahun_pelajaran.semester')
            ->join('detail_siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'detail_siswa.id_tapel', '=', 'tahun_pelajaran.id_tapel')
            ->where('kelas.id_kelas', '=', 'KLS303')
            ->get();
        $pdf = PDF::loadView('/cetaksiswakls3sunflo', ['siswa' => $siswa]);
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
        //DB::table('siswa')
        //->where('siswa.nomor_induk',$id)
        //->delete();
        //return redirect('/siswakls3sunflo')->with('success','Data telah dihapus.');
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
