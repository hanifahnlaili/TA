@section('title')
    <title>Rapor Tengah Semester</title>
@endsection

@extends('index')

@section('konten')
<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
  <h3>Tambah Data Rapor Tengah Semester
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
        <h3>Tabel Rapor Tengah Semester</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                                                      
                  <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th style="vertical-align:middle">Nomor</th>
                        <th style="vertical-align:middle">Nama Siswa</th>
                        <th style="vertical-align:middle">Nama KD</th>
                        <th style="vertical-align:middle">Detail Kompetensi Dasar</th>
                        <th style="vertical-align:middle">KBM</th>
                        <th style="vertical-align:middle">Nilai Harian</th>
                        <th style="vertical-align:middle">Nilai PTS</th>
                        <th style="vertical-align:middle">Rata - rata</th>
                        <th style="vertical-align:middle">Capaian</th>
                        <th style="vertical-align:middle">Deskripsi</th> 
                        <th style="vertical-align:middle">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($raportengah as $t)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$t->nama_siswa}}</td>
                        <td>{{$t->nama_kd}}</td>
                        <td>{{$t->detail_kd}}</td>
                        <td>{{$t->nilai_kbm}}</td>
                        <td>{{$t->nilai_harian}}</td>
                        <td>{{$t->nilai_PTS}}</td>
                        <td>{{$avgnihar}}</td>
                        <td>{{$t->range_huruf}}</td>
                        <td>{{$t->keterangan}}</td>
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