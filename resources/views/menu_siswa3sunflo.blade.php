@section('title')
    <title>Siswa Kelas 3 Sunflower</title>
@endsection

@extends('index')

@section('konten')


<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
  <h3 style="margin-top: 30px;">Tambah dan Cetak Tabel Siswa
    <ul class="nav navbar-right panel_toolbox">
    <a class="btn btn-app" href="{{url('/siswa/create')}}">
      <i class="fa fa-user-plus"></i> Add
    </a>
    <a class="btn btn-app" href="{{url('/siswa/cetakpdf')}}">
      <i class="fa fa-save"></i> Print
    </a>
    </ul>
  </h3>
  </div>

    <div class="x_panel">
      <div class="x_title">
        <h3>Tabel Siswa Kelas 3 Sunflower</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">

                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nomor Induk</th>
                      <th>NISN Siswa</th>
                      <th>Nama siswa</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Diterima Dikelas</th>
                      <th>Tanggal Diterima Dikelas</th>
                      <th>Foto</th>
                      <th>Tools</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($siswa as $t)
                    <tr>
                      <td>{{$t->NOMOR_INDUK}}</td>
                      <td>{{$t->NISN_SISWA}}</td>
                      <td>{{$t->NAMA_SISWA}}</td>
                      <td>{{$t->ALAMAT}}</td>
                      <td>{{$t->TELEPON}}</td>
                      <td>{{$t->DITERIMA_DIKELAS}}</td>
                      <td>{{$t->TANGGAL_DITERIMA_DIKELAS}}</td>
                      <td>{{$t->FOTO}}</td>
                      <td align="center">
                        <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t->NOMOR_INDUK) }}"><i class="fa fa-edit"></i></a>  
                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detail Siswa"><i class="fa fa-info-circle"></i></button>                        
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