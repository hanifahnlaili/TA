<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \PDF;

class KompetensiDasarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd = DB::table('kompetensidasar')
            ->select('kompetensidasar.*',  'matapelajaran.nama_mapel', 'kompetensi_inti.nama_ki')
            ->join('matapelajaran', 'matapelajaran.id_mapel', '=', 'kompetensidasar.id_mapel')
            ->join('kompetensi_inti', 'kompetensi_inti.id_ki', '=', 'kompetensidasar.id_ki')
            ->get();
        return view('menu_kdkls3',['kompetensidasar'=>$kd]);
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
        //
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
