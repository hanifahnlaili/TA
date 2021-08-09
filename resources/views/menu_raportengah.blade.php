@section('title')
    <title>Rapor Tengah Semester</title>
@endsection

@extends('index')

@section('konten')
<div class="col-md-12 col-sm-12 ">

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Al-Qur'an Hadist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-aqidahakhlaq-tab" data-toggle="pill" href="#pills-aqidahakhlaq" role="tab" aria-controls="pills-aqidahakhlaq" aria-selected="false">Aqidah Akhlaq</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-kmd-tab" data-toggle="pill" href="#pills-kmd" role="tab" aria-controls="pills-kmd" aria-selected="false">KMD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-pkn-tab" data-toggle="pill" href="#pills-pkn" role="tab" aria-controls="pills-pkn" aria-selected="false">PKn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasaindonesia-tab" data-toggle="pill" href="#pills-bahasaindonesia" role="tab" aria-controls="pills-bahasaindonesia" aria-selected="false">Bahasa Indonesia</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-matematika-tab" data-toggle="pill" href="#pills-matematika" role="tab" aria-controls="pills-matematika" aria-selected="false">Matematika</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ipa-tab" data-toggle="pill" href="#pills-ipa" role="tab" aria-controls="pills-ipa" aria-selected="false">IPA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ips-tab" data-toggle="pill" href="#pills-ips" role="tab" aria-controls="pills-ips" aria-selected="false">IPS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-senbudprakarya-tab" data-toggle="pill" href="#pills-senbudprakarya" role="tab" aria-controls="pills-senbudprakarya" aria-selected="false">Senbud Prakarya</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-penjasorkes-tab" data-toggle="pill" href="#pills-penjasorkes" role="tab" aria-controls="pills-penjasorkes" aria-selected="false">Penjasorkes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasajawa-tab" data-toggle="pill" href="#pills-bahasajawa" role="tab" aria-controls="pills-bahasajawa" aria-selected="false">Bahasa Jawa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasaarab-tab" data-toggle="pill" href="#pills-bahasaarab" role="tab" aria-controls="pills-bahasaarab" aria-selected="false">Bahasa Arab</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasainggris-tab" data-toggle="pill" href="#pills-bahasainggris" role="tab" aria-controls="pills-bahasainggris" aria-selected="false">Bahasa Inggris</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-tik-tab" data-toggle="pill" href="#pills-tik" role="tab" aria-controls="pills-tik" aria-selected="false">TIK</a>
    </li>
  </ul>

  <div class="tab-content" id="pills-tabContent">

    <!-- Al-Qur'an Hadist -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addalquran">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal -->
      @foreach($raportengah as $b)
      <div class="modal fade" id="addalquran" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Rapor Tengah Semester</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="POST">
                @method('PUT')
                @csrf

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Pilih Siswa </label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" id="">
                      <option>Nama siswa</option>
                    </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Pilih Kompetensi Dasar</label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" id="">
                      <option>Nama Kompetensi Dasar</option>
                    </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai Harian</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai Harian">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai PTS</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai PTS">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;"> Pilih Range Nilai</label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" id="">
                      <option>A</option>
                    </select>
                  </div>
                </div>


              </form>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach

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
                            <!-- sementara buat rata2 nilai harian -->
                            <td>{{$t->nilai_harian}}</td>
                            <td>{{$t->range_huruf}}</td>
                            <td>{{$t->keterangan}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Aqidah Akhlaq -->
    <div class="tab-pane fade " id="pills-aqidahakhlaq" role="tabpanel" aria-labelledby="pills-aqidahakhlaq-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah1 as $t1)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t1->nama_siswa}}</td>
                          <td>{{$t1->nama_kd}}</td>
                          <td>{{$t1->detail_kd}}</td>
                          <td>{{$t1->nilai_kbm}}</td>
                          <td>{{$t1->nilai_harian}}</td>
                          <td>{{$t1->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t1->range_huruf}}</td>
                          <td>{{$t1->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t1->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t1->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- KMD -->
    <div class="tab-pane fade " id="pills-kmd" role="tabpanel" aria-labelledby="pills-kmd-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah2 as $t2)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t2->nama_siswa}}</td>
                          <td>{{$t2->nama_kd}}</td>
                          <td>{{$t2->detail_kd}}</td>
                          <td>{{$t2->nilai_kbm}}</td>
                          <td>{{$t2->nilai_harian}}</td>
                          <td>{{$t2->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t2->range_huruf}}</td>
                          <td>{{$t2->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t2->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t2->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- PKn -->
    <div class="tab-pane fade " id="pills-pkn" role="tabpanel" aria-labelledby="pills-pkn-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah3 as $t3)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t3->nama_siswa}}</td>
                          <td>{{$t3->nama_kd}}</td>
                          <td>{{$t3->detail_kd}}</td>
                          <td>{{$t3->nilai_kbm}}</td>
                          <td>{{$t3->nilai_harian}}</td>
                          <td>{{$t3->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t3->range_huruf}}</td>
                          <td>{{$t3->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t3->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t3->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Bahasa Indonesia -->
    <div class="tab-pane fade " id="pills-bahasaindonesia" role="tabpanel" aria-labelledby="pills-bahasaindonesia-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah4 as $t4)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t4->nama_siswa}}</td>
                          <td>{{$t4->nama_kd}}</td>
                          <td>{{$t4->detail_kd}}</td>
                          <td>{{$t4->nilai_kbm}}</td>
                          <td>{{$t4->nilai_harian}}</td>
                          <td>{{$t4->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t4->range_huruf}}</td>
                          <td>{{$t4->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t4->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t4->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Matematika -->
    <div class="tab-pane fade " id="pills-matematika" role="tabpanel" aria-labelledby="pills-matematika-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah5 as $t5)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t5->nama_siswa}}</td>
                          <td>{{$t5->nama_kd}}</td>
                          <td>{{$t5->detail_kd}}</td>
                          <td>{{$t5->nilai_kbm}}</td>
                          <td>{{$t5->nilai_harian}}</td>
                          <td>{{$t5->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t5->range_huruf}}</td>
                          <td>{{$t5->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t5->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t5->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- IPA -->
    <div class="tab-pane fade " id="pills-ipa" role="tabpanel" aria-labelledby="pills-ipa-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah6 as $t6)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t6->nama_siswa}}</td>
                          <td>{{$t6->nama_kd}}</td>
                          <td>{{$t6->detail_kd}}</td>
                          <td>{{$t6->nilai_kbm}}</td>
                          <td>{{$t6->nilai_harian}}</td>
                          <td>{{$t6->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t6->range_huruf}}</td>
                          <td>{{$t6->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t6->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t6->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- IPS -->
    <div class="tab-pane fade " id="pills-ips" role="tabpanel" aria-labelledby="pills-ips-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah7 as $t7)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t7->nama_siswa}}</td>
                          <td>{{$t7->nama_kd}}</td>
                          <td>{{$t7->detail_kd}}</td>
                          <td>{{$t7->nilai_kbm}}</td>
                          <td>{{$t7->nilai_harian}}</td>
                          <td>{{$t7->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t7->range_huruf}}</td>
                          <td>{{$t7->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t7->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t7->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Senbud Prakarya -->
    <div class="tab-pane fade " id="pills-senbudprakarya" role="tabpanel" aria-labelledby="pills-senbudprakarya-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah8 as $t8)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t8->nama_siswa}}</td>
                          <td>{{$t8->nama_kd}}</td>
                          <td>{{$t8->detail_kd}}</td>
                          <td>{{$t8->nilai_kbm}}</td>
                          <td>{{$t8->nilai_harian}}</td>
                          <td>{{$t8->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t->range_huruf}}</td>
                          <td>{{$t->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t8->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t8->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Penjasorkes -->
    <div class="tab-pane fade " id="pills-penjasorkes" role="tabpanel" aria-labelledby="pills-penjasorkes-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah9 as $t9)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t9->nama_siswa}}</td>
                          <td>{{$t9->nama_kd}}</td>
                          <td>{{$t9->detail_kd}}</td>
                          <td>{{$t9->nilai_kbm}}</td>
                          <td>{{$t9->nilai_harian}}</td>
                          <td>{{$t9->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t9->range_huruf}}</td>
                          <td>{{$t9->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t9->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t9->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Bahasa Jawa -->
    <div class="tab-pane fade " id="pills-bahasajawa" role="tabpanel" aria-labelledby="pills-bahasajawa-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah10 as $t10)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t10->nama_siswa}}</td>
                          <td>{{$t10->nama_kd}}</td>
                          <td>{{$t10->detail_kd}}</td>
                          <td>{{$t10->nilai_kbm}}</td>
                          <td>{{$t10->nilai_harian}}</td>
                          <td>{{$t10->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t10->range_huruf}}</td>
                          <td>{{$t10->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t10->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t10->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Bahasa Arab -->
    <div class="tab-pane fade " id="pills-bahasaarab" role="tabpanel" aria-labelledby="pills-bahasaarab-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah11 as $t11)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t11->nama_siswa}}</td>
                          <td>{{$t11->nama_kd}}</td>
                          <td>{{$t11->detail_kd}}</td>
                          <td>{{$t11->nilai_kbm}}</td>
                          <td>{{$t11->nilai_harian}}</td>
                          <td>{{$t11->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t11->range_huruf}}</td>
                          <td>{{$t11->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t11->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t11->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- Bahasa Inggris -->
    <div class="tab-pane fade " id="pills-bahasainggris" role="tabpanel" aria-labelledby="pills-bahasainggris-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                      @foreach($raportengah12 as $t12)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t12->nama_siswa}}</td>
                          <td>{{$t12->nama_kd}}</td>
                          <td>{{$t12->detail_kd}}</td>
                          <td>{{$t12->nilai_kbm}}</td>
                          <td>{{$t12->nilai_harian}}</td>
                          <td>{{$t12->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t12->range_huruf}}</td>
                          <td>{{$t12->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t12->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t12->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

    <!-- TIK -->
    <div class="tab-pane fade " id="pills-tik" role="tabpanel" aria-labelledby="pills-tik-tab">
      <div class="x_panel">
        <h3>Tambah Data Rapor Tengah Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        <!-- table harus pake class -->
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
                      @foreach($raportengah13 as $t13)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t13->nama_siswa}}</td>
                          <td>{{$t13->nama_kd}}</td>
                          <td>{{$t13->detail_kd}}</td>
                          <td>{{$t13->nilai_kbm}}</td>
                          <td>{{$t13->nilai_harian}}</td>
                          <td>{{$t13->nilai_PTS}}</td>
                          <!-- sementara buat rata2 nilai harian -->
                          <td>{{$t13->range_huruf}}</td>
                          <td>{{$t13->keterangan}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t13->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                            <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t13->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a>
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

@section('script')

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {

  var table = $('#datatable').DataTable( {
      responsive: true,
      paging: false,
      searching: false
  } )
  .columns.adjust()
  .responsive.recalc();

});
</script>

@endsection