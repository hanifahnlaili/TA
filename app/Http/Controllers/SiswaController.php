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
        ->select('siswa.*', 'wali_murid.*', 'sekolah_asal.*')
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
        $wali_murid_selected = null;
        if(DB::table('wali_murid')->where('nama_ayah', $request->input('nama_ayah'))->where('nama_ibu', $request->input('nama_ibu'))->first()){
            $wali_murid_selected = DB::table('wali_murid')->where('nama_ayah', $request->input('nama_ayah'))->where('nama_ibu', $request->input('nama_ibu'))->first();
        }else{
            DB::table('wali_murid')->insert(array(
                'nama_ayah' => $request->input('nama_ayah'),
                'nama_ibu' => $request->input('nama_ibu'),
                'alamat_ortu' => $request->input('alamat_ortu'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu')
            ));
            $wali_murid_selected = DB::table('wali_murid')->where('nama_ayah', $request->input('nama_ayah'))->where('nama_ibu', $request->input('nama_ibu'))->first();
        }

        $sekolah_asal_selected = null;
        if(DB::table('sekolah_asal')->where('nama_sekolah', $request->input('nama_sekolah'))->first()){
            $sekolah_asal_selected = DB::table('sekolah_asal')->where('nama_sekolah', $request->input('nama_sekolah'))->first();
        }else{
            $sekolah_asal_selected = DB::table('sekolah_asal')->insert(array(
                'nama_sekolah' => $request->input('nama_sekolah'),
                'alamat_sekolah' => $request->input('alamat_sekolah'),
            ));
            $sekolah_asal_selected = DB::table('sekolah_asal')->where('nama_sekolah', $request->input('nama_sekolah'))->first();
        }

        DB::table('siswa')->insert(array(
            'id_ortu' => $wali_murid_selected->ID_ORTU,
            'id_sekolah' => $sekolah_asal_selected->ID_SEKOLAH,
            'nomor_induk' => $request->input('nomor_induk'),
            'nama_siswa' => $request->input('nama_siswa'),
            'nisn_siswa' => $request->input('nisn_siswa'),
            'telepon' => $request->input('no_telp_siswa'),
            'alamat' => $request->input('alamat_siswa')
        ));
        return redirect('/menu_siswa3sunflo');
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
            ->select('siswa.*','kelas.nama_kelas','tahun_pelajaran.id_tahunpelajaran', 'tahun_pelajaran.semester')
            ->join('detail_siswa', 'siswa.nomor_induk', '=', 'detail_siswa.nomor_induk')
            ->join('kelas', 'kelas.id_kelas', '=', 'detail_siswa.id_kelas')
            ->join('tahun_pelajaran', 'tahun_pelajaran.id_tahunpelajaran', '=', 'detail_siswa.id_tahunpelajaran')
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
        DB::table('siswa')->where('siswa.nomor_induk',$id)->delete();
        return redirect('/menu_siswa3sunflo')->with('success','Data telah dihapus.');
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
