@section('title')
    <title>Rapor Akhir Semester</title>
@endsection

@extends('index')

@section('konten')
<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
  <h3>Tambah Data Rapor Akhir Semester
    <ul class="nav navbar-right panel_toolbox">
    <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
      <i class="fa fa-user-plus"></i> Add
    </a>
    <!-- <a class="btn btn-app" href="{{url('/bukuphb/cetakpdf')}}">
      <i class="fa fa-save"></i> Print
    </a> -->
    </ul>
  </h3>
  </div>

    <div class="x_panel">
      <div class="x_title">
        <h3>Tabel Rapor Akhir Semester</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                                                      
                  <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                      <tr style="text-align:center">
                        <th style="vertical-align:middle" rowspan="2">Nomor</th>
                        <th style="vertical-align:middle" rowspan="2">Nama Siswa</th>
                        <th style="vertical-align:middle" rowspan="2">Mata Pelajaran</th>
                        <th style="vertical-align:middle" rowspan="2">KBM</th>
                        <th style="vertical-align:middle" colspan="3">Pengetahuan (KI-3)</th>
                        <th style="vertical-align:middle" colspan="3">Keterampilan (KI-4)</th>
                        <th style="vertical-align:middle" rowspan="2">Tools</th>
                        </tr>
                      <tr>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($raporakhir as $a)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->nama_siswa}}</td>
                        <td>{{$a->nama_matapelajaran}}</td>
                        <td>{{$a->nilai_kbm}}</td>
                        <td>{{$a->nilai_akhir}}</td>
                        <td>{{$a->deskripsi}}</td>
                        <td>
                          <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$b->ID_NBP) }}"><i class="fa fa-edit"></i></a>
                          <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$b->ID_NBP) }}"><i class="fa fa-info-circle"></i></a>
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


@endsection