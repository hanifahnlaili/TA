@section('title')
    <title>Presensi Kelas 3 Sunflower</title>
@endsection

@extends('home')

@section('konten')

<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_panel">
              <h3 style="margin-top: 30px;">Tambah Presensi
                <ul class="nav navbar-right panel_toolbox">
                <a class="btn btn-app" href="{{url('/presensi/create')}}">
                  <i class="fa fa-user-plus"></i> Add
                </a>
                <a class="btn btn-app" href="{{url('/presensi/cetakpdf')}}">
                  <i class="fa fa-save"></i> Print
                </a>
                </ul>
              </h3>
              </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Presensi Kelas 3 Sunflower</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
        
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                <tr>
                                  <th>ID Presensi</th>
                                  <th>Nama Siswa</th>
                                  <th>Tahun Pelajaran</th>
                                  <th>Sakit</th>
                                  <th>Ijin</th>
                                  <th>Absen</th>
                                  <th>Tools</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($presensi as $p)
                                <tr>
                                  <td>{{$p->id_presensi}}</td>
                                  <td>{{$p->nama_siswa}}</td>
                                  <td>{{$p->tapel}}
                                      @if ( ( $p -> semester ) == 1 ) 
                                        Ganjil
                                      @else
                                        Genap
                                      @endif
                                  </td>
                                  <td>{{$p->sakit}}</td>
                                  <td>{{$p->ijin}}</td>
                                  <td>{{$p->absen}}</td>
                                  <td>
                                  <a href="{{ url('/presensi/edit/'.$p->id_presensi) }}" class="btn btn-info btn-sm">Edit</a>
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