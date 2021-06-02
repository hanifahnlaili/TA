@section('title')
    <title>Nilai KBM Kelas 3</title>
@endsection

@extends('home')

@section('konten')

<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

            <div class="x_panel">
              <h3 style="margin-top: 30px;">Cetak Ketentuan Belajar Minimal Kelas 3
                <ul class="nav navbar-right panel_toolbox">
                <a class="btn btn-app" href="{{url('/kbm/cetakpdf')}}">
                  <i class="fa fa-save"></i> Print
                </a>
                </ul>
              </h3>
              </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h3>Daftar Nilai Ketuntasan Belajar Minimal (KBM) Kelas 3</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
        
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                <tr>
                                  <th>ID KBM</th>
                                  <th>Nama Mata Pelajaran</th>
                                  <th>Nilai KBM</th>
                                  <th>Tools</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($kbm as $k)
                                <tr>
                                  <td>{{$k->id_kbm}}</td>
                                  <td>{{$k->nama_mapel}}</td>
                                  <td>{{$k->nilai_kbm}}</td>
                                  <td>
                                  <a href="{{ url('/kbm/edit/'.$k->id_kbm) }}" class="btn btn-info btn-sm">Edit</a>
	                                </td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>

                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>                            

@endsection