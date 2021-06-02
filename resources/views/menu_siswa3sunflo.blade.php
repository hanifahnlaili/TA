@section('title')
    <title>Siswa Kelas 3 Sunflower</title>
@endsection

@extends('home')

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
                                  <th>Nama Siswa</th>
                                  <th>NISN Siswa</th>
                                  <th>Kelas</th>
                                  <th>Tahun Pelajaran</th>
                                  <th>Tools</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($siswa as $t)
                                <tr>
                                  <td>{{$t->nomor_induk}}</td>
                                  <td>{{$t->nama_siswa}}</td>
                                  <td>{{$t->nisn_siswa}}</td>
                                  <td>{{$t->nama_kelas}}</td>
                                  <td>{{$t->tapel}}
                                      @if ( ( $t -> semester ) == 1 ) 
                                        Ganjil
                                      @else
                                        Genap
                                      @endif
                                  </td>
                                  <td>
                                    <a href="{{ url('/siswa/edit/'.$t->nomor_induk) }}" class="btn btn-info btn-sm">Edit</a>
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