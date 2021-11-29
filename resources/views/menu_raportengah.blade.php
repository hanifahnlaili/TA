@section('title')
    Rapor Tengah Semester
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputAlquran">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputAlquran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL001')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL001')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah as $t)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t->nama_siswa}}</td>
                          <td>{{$t->nilai_kbm}}</td>
                          <td>{{$t->nilai_PTS}}</td>
                          @if($t->nilai_harian2 != null)
                            <td>{{ floor( ($t->nilai_harian1 + $t->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t->nomor_induk }}/{{ $t->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t->nomor_induk }}/{{ $t->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputAqidah">
              <i class="fas fa-plus-circle"></i> Add
            </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputAqidah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL002')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL002')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah1 as $t1)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t1->nama_siswa}}</td>
                          <td>{{$t1->nilai_kbm}}</td>
                          <td>{{$t1->nilai_PTS}}</td>
                          @if($t1->nilai_harian2 != null)
                            <td>{{ floor( ($t1->nilai_harian1 + $t1->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t1->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t1->nomor_induk }}/{{ $t1->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t1->nomor_induk }}/{{ $t1->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
            <button role="button" class="btn btn-primary" data-toggle="modal" data-target="#inputKmd">
              <i class="fa fa-user-plus"></i> Add
            </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputKmd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL005')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL005')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah4 as $t4)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t4->nama_siswa}}</td>
                          <td>{{$t4->nilai_kbm}}</td>
                          <td>{{$t4->nilai_PTS}}</td>
                          @if($t4->nilai_harian2 != null)
                            <td>{{ floor( ($t4->nilai_harian1 + $t4->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t4->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t4->nomor_induk }}/{{ $t4->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t4->nomor_induk }}/{{ $t4->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPkn">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputPkn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL006')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL006')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah5 as $t5)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t5->nama_siswa}}</td>
                          <td>{{$t5->nilai_kbm}}</td>
                          <td>{{$t5->nilai_PTS}}</td>
                          @if($t5->nilai_harian2 != null)
                            <td>{{ floor( ($t5->nilai_harian1 + $t5->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t5->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t5->nomor_induk }}/{{ $t5->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t5->nomor_induk }}/{{ $t5->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputBahasaInd">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputBahasaInd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL007')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL007')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah6 as $t6)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t6->nama_siswa}}</td>
                          <td>{{$t6->nilai_kbm}}</td>
                          <td>{{$t6->nilai_PTS}}</td>
                          @if($t6->nilai_harian2 != null)
                            <td>{{ floor( ($t6->nilai_harian1 + $t6->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t6->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t6->nomor_induk }}/{{ $t6->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t6->nomor_induk }}/{{ $t6->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputMtk">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputMtk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL008')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL008')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah7 as $t7)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t7->nama_siswa}}</td>
                          <td>{{$t7->nilai_kbm}}</td>
                          <td>{{$t7->nilai_PTS}}</td>
                          @if($t7->nilai_harian2 != null)
                            <td>{{ floor( ($t7->nilai_harian1 + $t7->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t7->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t7->nomor_induk }}/{{ $t7->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t7->nomor_induk }}/{{ $t7->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIpa">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL009')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL009')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah8 as $t8)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t8->nama_siswa}}</td>
                          <td>{{$t8->nilai_kbm}}</td>
                          <td>{{$t8->nilai_PTS}}</td>
                          @if($t8->nilai_harian2 != null)
                            <td>{{ floor( ($t8->nilai_harian1 + $t8->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t8->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t8->nomor_induk }}/{{ $t8->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t8->nomor_induk }}/{{ $t8->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIps">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIps" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL010')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL010')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah9 as $t9)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t9->nama_siswa}}</td>
                          <td>{{$t9->nilai_kbm}}</td>
                          <td>{{$t9->nilai_PTS}}</td>
                          @if($t9->nilai_harian2 != null)
                            <td>{{ floor( ($t9->nilai_harian1 + $t9->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t9->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t9->nomor_induk }}/{{ $t9->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t9->nomor_induk }}/{{ $t9->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputSenbud">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputSenbud" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL011')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL011')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah10 as $t10)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t10->nama_siswa}}</td>
                          <td>{{$t10->nilai_kbm}}</td>
                          <td>{{$t10->nilai_PTS}}</td>
                          @if($t10->nilai_harian2 != null)
                            <td>{{ floor( ($t10->nilai_harian1 + $t10->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t10->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t10->nomor_induk }}/{{ $t10->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t10->nomor_induk }}/{{ $t10->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPenjas">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputPenjas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL012')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL012')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah11 as $t11)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t11->nama_siswa}}</td>
                          <td>{{$t11->nilai_kbm}}</td>
                          <td>{{$t11->nilai_PTS}}</td>
                          @if($t11->nilai_harian2 != null)
                            <td>{{ floor( ($t11->nilai_harian1 + $t11->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t11->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t11->nomor_induk }}/{{ $t11->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t11->nomor_induk }}/{{ $t11->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputJawa">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputJawa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL013')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL013')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah12 as $t12)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t12->nama_siswa}}</td>
                          <td>{{$t12->nilai_kbm}}</td>
                          <td>{{$t12->nilai_PTS}}</td>
                          @if($t12->nilai_harian2 != null)
                            <td>{{ floor( ($t12->nilai_harian1 + $t12->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t12->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t12->nomor_induk }}/{{ $t12->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t12->nomor_induk }}/{{ $t12->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputArab">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputArab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL014')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL014')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah13 as $t13)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t13->nama_siswa}}</td>
                          <td>{{$t13->nilai_kbm}}</td>
                          <td>{{$t13->nilai_PTS}}</td>
                          @if($t13->nilai_harian2 != null)
                            <td>{{ floor( ($t13->nilai_harian1 + $t13->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t13->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t13->nomor_induk }}/{{ $t13->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t13->nomor_induk }}/{{ $t13->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputInggris">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputInggris" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL015')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL015')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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
                                                        
                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah14 as $t14)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t14->nama_siswa}}</td>
                          <td>{{$t14->nilai_kbm}}</td>
                          <td>{{$t14->nilai_PTS}}</td>
                          @if($t14->nilai_harian2 != null)
                            <td>{{ floor( ($t14->nilai_harian1 + $t14->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t14->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t14->nomor_induk }}/{{ $t14->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t14->nomor_induk }}/{{ $t14->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputTik">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputTik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Tengah Semester</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raportengah/insert" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="number" name="pts" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 1</label>
                      <select name="kd1" required class="form-control mb-12 mb-12">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL016')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="number" name="nilai1" required class="form-control">
                    </div>
                  </div>
                </div>
                <hr style="outline-style: auto;">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="form-group">
                      <label>Kompetensi Dasar 2</label>
                      <select name="kd2" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Kompetensi Dasar --</option>
                        @foreach($kd as $k)
                          @if($k->ID_MATAPELAJARAN == 'MPL016')
                            <option value="{{ $k->ID_KD }}">{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                          @endif
                        @endforeach
                      </select>                    
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      <input type="number" name="nilai2" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
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

                    <table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
                          <th style="vertical-align:middle">Rata - rata</th>
                          <th style="vertical-align:middle">Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raportengah15 as $t15)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t15->nama_siswa}}</td>
                          <td>{{$t15->nilai_kbm}}</td>
                          <td>{{$t15->nilai_PTS}}</td>
                          @if($t15->nilai_harian2 != null)
                            <td>{{ floor( ($t15->nilai_harian1 + $t15->nilai_harian2) / 2) }}</td>
                          @else
                            <td>{{ $t15->nilai_harian1 }}</td>
                          @endif
                          <!-- sementara buat rata2 nilai harian -->
                          <td>
                            <a role="button" class="btn btn-secondary" title="Edit Siswa" href="/menu_raportengah/edit/{{ $t15->nomor_induk }}/{{ $t15->id_matapelajaran }}"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-info tooltip-test" title="Detail Siswa" href="/menu_raportengah/detail/{{ $t15->nomor_induk }}/{{ $t15->id_matapelajaran }}"><i class="fa fa-info-circle"></i></a>
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
<!-- <script>
$(document).ready(function() {

  var table = $('#datatable').DataTable( {
      responsive: true,
      paging: false,
      searching: false
  } )
  .columns.adjust()
  .responsive.recalc();

});
</script> -->

@endsection
