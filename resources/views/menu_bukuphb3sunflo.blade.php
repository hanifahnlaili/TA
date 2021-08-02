@section('title')
    <title>Nilai Buku Penghubung</title>
@endsection

@extends('index')

@section('konten')
<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
  <h3>Tambah Data Nilai Buku Penghubung 
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
        <h3>Tabel Rekap Nilai Buku Penghubung</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                                                      
                  <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th style="vertical-align:middle">ID Nilai Buku Penghubung</th>
                        <th style="vertical-align:middle">Nama Siswa</th>
                        <th style="vertical-align:middle">Nilai Guru Spiritual</th>
                        <th style="vertical-align:middle">Nilai Orang Tua Spiritual</th>
                        <th style="vertical-align:middle">Rata-rata Spiritual</th>
                        <th style="vertical-align:middle">Nilai Guru Sosial</th>
                        <th style="vertical-align:middle">Nilai Orang Tua Sosial</th>
                        <th style="vertical-align:middle">Rata-rata Sosial</th>
                        <th style="vertical-align:middle">Deskripsi</th>
                        <!-- <th>Kompetensi Dasar Spiritual</th>
                        <th>Kompetensi Dasar Sosial</th> -->
                        <th style="vertical-align:middle">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($buku_penghubung as $b)
                      <tr>
                        <td>{{$b->ID_NBP}}</td>
                        <td>{{$b->nama_siswa}}</td>
                        <td>{{$b->GURU_SPIRITUAL}}</td>
                        <td>{{$b->ORTU_SPIRITUAL}}</td>
                        <td>{{$avgspiritual}}</td>
                        <td>{{$b->GURU_SOSIAL}}</td>
                        <td>{{$b->ORTU_SOSIAL}}</td>
                        <td>{{$avgsosial}}</td>
                        <td>{{$b->DESKRIPSI}}</td>
                        <!-- <td>{{$b->KD_SPIRITUAL}}</td>
                        <td>{{$b->KD_SOSIAL}}</td> -->
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