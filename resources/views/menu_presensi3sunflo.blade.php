@section('title')
    <title>Presensi Kelas 3 Sunflower</title>
@endsection

@extends('index')

@section('konten')

<div class="">
    <div class="clearfix"></div>
      <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Presensi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Kepribadian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="x_panel">
                    <h3 style="margin-top: 30px;">Tambah Kepribadian
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
                      <h3>Tabel Kepribadian Kelas 3 Sunflower</h3>
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
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
            </nav>
          </div>
      </div>
    </div>
</div>                            

@endsection