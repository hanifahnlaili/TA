<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \PDF;

class KompetensiDasarController extends Controller
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
    public function index()
    {
        $kd = DB::table('kompetensi_dasar')
            ->select('kompetensi_dasar.*',  'mata_pelajaran.nama_matapelajaran','mata_pelajaran.id_matapelajaran','tahun_pelajaran.tahunpelajaran', 'kompetensi_inti.nama_ki')
            ->join('mata_pelajaran', 'mata_pelajaran.id_matapelajaran', 'kompetensi_dasar.id_matapelajaran')
            ->join('tahun_pelajaran','tahun_pelajaran.id_tahunpelajaran','kompetensi_dasar.id_tahunpelajaran')
            ->join('kompetensi_inti', 'kompetensi_inti.id_ki', 'kompetensi_dasar.id_ki')
            ->get();
        $mapel = DB::table('mata_pelajaran')->select('id_matapelajaran','nama_matapelajaran')->get();
        $tapel = DB::table('tahun_pelajaran')->select('id_tahunpelajaran','tahunpelajaran')->get();
        $ki = DB::table('kompetensi_inti')->select('id_ki')->get();
        return view('menu_kdkls3',compact('kd','mapel','tapel','ki'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kd = DB::table('kompetensidasar')
            ->where('kompetensidasar.id_kd', '=', $id)
            ->select('kompetensidasar.*',  'matapelajaran.nama_mapel', 'kompetensi_inti.nama_ki')
            ->join('matapelajaran', 'matapelajaran.id_mapel', '=', 'kompetensidasar.id_mapel')
            ->join('kompetensi_inti', 'kompetensi_inti.id_ki', '=', 'kompetensidasar.id_ki')
            ->get();
        return view('editkdkls3',['kompetensidasar'=>$kd]);
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
        DB::table('kompetensidasar')
            ->where('id_kd', $request->id_kd)
            ->update([
                'detail_kd' => $request->detail_kd,
                'detail_kd1' => $request->detail_kd1,
                'detail_kd2' => $request->detail_kd2,
                'detail_kd3' => $request->detail_kd3,
                'detail_kd4' => $request->detail_kd4,
                'detail_kd5' => $request->detail_kd5,
                'detail_kd6' => $request->detail_kd6
        ]);
        return redirect('/menu_kdkls3');
    }

    public function cetakpdf()
    {
        $kd = DB::table('kompetensidasar')
            ->select('kompetensidasar.*',  'matapelajaran.nama_mapel', 'kompetensi_inti.nama_ki')
            ->join('matapelajaran', 'matapelajaran.id_mapel', '=', 'kompetensidasar.id_mapel')
            ->join('kompetensi_inti', 'kompetensi_inti.id_ki', '=', 'kompetensidasar.id_ki')
            ->get();
        // $paper_width = 793.7007874; // 38 mm
        // $paper_height = 623.62204724; // 18 mm
        // $paper_size = array(0, 0, $paper_width, $paper_height);
        $pdf =  PDF::loadView  ('/cetakkdkls3',  compact('kd'), ['kompetensidasar' => $kd]); 
        $pdf->setPaper('legal','landscape');
        return $pdf->stream();
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
        $id_matapelajaran = DB::table('mata_pelajaran')
            ->where([
                'id_matapelajaran' => $request->id_matapelajaran
            ])->first();

            // dd($id_matapelajaran);
        
        $id_tahunpelajaran = DB::table('tahun_pelajaran')
        ->where([
            'id_tahunpelajaran' => $request->id_tahunpelajaran
        ])->first();

        $id_ki = DB::table('kompetensi_inti')
        ->where([
            'id_ki' => $request->id_ki
        ])->first();

        DB::table('kompetensi_dasar')
        ->insert([
            'id_matapelajaran' => $id_matapelajaran->ID_MATAPELAJARAN,
            'id_tahunpelajaran' => $id_tahunpelajaran->ID_TAHUNPELAJARAN,
            'id_ki' => $id_ki->ID_KI,
            'nama_kd' =>$request->nama_kd,
            'detail_kd' => $request->detail_kd
        ]);

        return redirect('/menu_kdkls3')->with('alert_success', 'Data Kompetensi Dasar Berhasil Disimpan.');
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
