@section('title')
    <title>Siswa Kelas 3 Sunflower</title>
@endsection

@extends('index')

@section('konten')

<div class="">
    <div class="clearfix"></div>
        <div class="row">
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
                                  <th>ID Ortu</th>
                                  <th>id sekolah</th>
                                  <th>nama siswa</th>
                                  <th>NISN Siswa</th>
                                  <th>jenis kelamin</th>
                                  <th>TTL</th>
                                  <th>agama</th>
                                  <th>anak ke</th>
                                  <th>status dalam keluarga</th>
                                  <th>alamat</th>
                                  <th>telepon</th>
                                  <th>foto</th>
                                  <th>diterima dikelas</th>
                                  <th>tanggal diterima dikelas</th>
                                  <th>Tools</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($siswa as $t)
                                <tr>
                                <td>{{$t->NOMOR_INDUK}}</td>
                                  <td>{{$t->ID_ORTU}}</td>
                                  <td>{{$t->ID_SEKOLAH}}</td>
                                  <td>{{$t->NAMA_SISWA}}</td>
                                  <td>{{$t->NISN_SISWA}}</td>
                                  <td>{{$t->JENIS_KELAMIN}}</td>
                                  
                                  <td>{{$t->TEMPAT_TANGGAL_LAHIR}}</td>
                                  <td>{{$t->AGAMA}}</td>
                                  <td>{{$t->ANAK_KE}}</td>
                                  <td>{{$t->STATUS_DALAM_KELUARGA}}</td>
                                  <td>{{$t->ALAMAT}}</td>
                                  <td>{{$t->TELEPON}}</td>
                                  <td>{{$t->FOTO}}</td>
                                  
                                  <td>{{$t->DITERIMA_DIKELAS}}</td>
                                  <td>{{$t->TANGGAL_DITERIMA_DIKELAS}}
                                  </td>


                                  <td>
                                    <a href="{{ url('/siswa/edit/'.$t->NOMOR_INDUK) }}" class="btn btn-info btn-sm">Edit</a>
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