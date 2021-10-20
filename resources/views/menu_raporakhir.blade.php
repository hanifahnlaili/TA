@section('title')
    <title>Rapor Akhir Semester</title>
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
      <h3>Tambah Data Rapor Akhir Semester
        <ul class="nav navbar-right panel_toolbox">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addalquran">
          <i class="fas fa-plus-circle"></i> Add
        </button>
        </ul>
      </h3>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="addalquran" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Rapor Akhir Semester</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('/menu_raporakhir/store') }}" method="POST">
                @method('POST')
                @csrf

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Pilih Siswa </label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" name="nomor_induk" id="nomor_induk">
                      @foreach($siswa as $s)
                      <option value="{{ $s->nomor_induk }}">
                        {{ $s->nama_siswa }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>
                
                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Mata Pelajaran</label>
                  </div>
                  <div class="col md-6">
                    <select disabled class="form-control" name="id_matapelajaran" id="id_matapelajaran">
                      @foreach($mapel as $m)
                      <option disabled value="{{ $m->id_matapelajaran == 'MPL001' }}">
                        {{ $m->nama_matapelajaran }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Pilih Kompetensi Inti</label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" name="id_ki" id="id_ki">
                      @foreach($ki as $ki)
                      <option value="{{ $ki->id_ki }}">{{ $ki->id_ki }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai Harian 3</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai Harian 3" name="nilai_harian3">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai Harian 4</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai Harian 4" name="nilai_harian4">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai PAS</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai PAS" name="nilai_PAS">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Deskripsi</label>
                  </div>
                  <div class="col md-6">
                    <input type="text" class="form-control" placeholder="Deskripsi" name="deskripsi">
                  </div>
                </div>
                <br>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
            
          </div>
        </div>
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
                                                          
                      <table class="datatable table table-bordered" style="width:100%">
                        <thead>
                          <tr style="text-align:center">
                            <th style="vertical-align:middle">Nomor</th>
                            <th style="vertical-align:middle">Nama Siswa</th>
                            <th style="vertical-align:middle">Mata Pelajaran</th>
                            <th style="vertical-align:middle">KBM</th>
                            <th style="vertical-align:middle">KI</th>
                            <th style="vertical-align:middle">Nilai Harian 1</th>
                            <th style="vertical-align:middle">Nilai Harian 2</th>
                            <th style="vertical-align:middle">Nilai Harian 3</th>
                            <th style="vertical-align:middle">Nilai Harian 4</th>
                            <th style="vertical-align:middle">Nilai PTS</th>
                            <th style="vertical-align:middle">Nilai PAS</th>
                            <th style="vertical-align:middle">Nilai Akhir</th>
                            <th style="vertical-align:middle">Predikat</th>
                            <th style="vertical-align:middle">Deskripsi</th>
                            <th style="vertical-align:middle">Tools</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($raporakhir as $a)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$a->nama_siswa}}</td>
                            <td>{{$a->nama_matapelajaran}}</td>
                            <td>{{$a->nilai_kbm}}</td>
                            <td>{{$a->ID_KI}}</td>
                            <td>{{$a->NILAI_HARIAN1}}</td>
                            <td>{{$a->NILAI_HARIAN2}}</td>
                            <td>{{$a->NILAI_HARIAN3}}</td>
                            <td>{{$a->NILAI_HARIAN4}}</td>
                            <td>{{$a->NILAI_PTS}}</td>
                            <td>{{$a->NILAI_PAS}}</td>
                            <td>{{ ($a->NILAI_HARIAN1 + $a->NILAI_HARIAN2 + $a->NILAI_HARIAN3 + $a->NILAI_HARIAN4 + $a->NILAI_PTS + $a->NILAI_PAS) /6}}</td>
                            <td>@if( $a->NILAI_AKHIR >= 93 )
                              A
                              @elseif( $a->NILAI_AKHIR >=84 )
                              B
                              @else
                              C
                              @endif
                            </td>
                            <td>{{$a->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$a->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir1 as $t1)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t1->nama_siswa}}</td>
                          <td>{{$t1->nama_matapelajaran}}</td>
                          <td>{{$t1->nilai_kbm}}</td>
                          <td>{{$t1->ID_KI}}</td>
                          <td>{{$t1->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t1->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t1->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir2 as $t2)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t2->nama_siswa}}</td>
                          <td>{{$t2->nama_matapelajaran}}</td>
                          <td>{{$t2->nilai_kbm}}</td>
                          <td>{{$t2->ID_KI}}</td>
                          <td>{{$t2->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t2->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t2->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir3 as $t3)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t3->nama_siswa}}</td>
                          <td>{{$t3->nama_matapelajaran}}</td>
                          <td>{{$t3->nilai_kbm}}</td>
                          <td>{{$t3->ID_KI}}</td>
                          <td>{{$t3->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t3->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t3->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir4 as $t4)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t4->nama_siswa}}</td>
                          <td>{{$t4->nama_matapelajaran}}</td>
                          <td>{{$t4->nilai_kbm}}</td>
                          <td>{{$t4->ID_KI}}</td>
                          <td>{{$t4->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t4->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t4->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir5 as $t5)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t5->nama_siswa}}</td>
                          <td>{{$t5->nama_matapelajaran}}</td>
                          <td>{{$t5->nilai_kbm}}</td>
                          <td>{{$t5->ID_KI}}</td>
                          <td>{{$t5->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t5->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t5->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir6 as $t6)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t6->nama_siswa}}</td>
                          <td>{{$t6->nama_matapelajaran}}</td>
                          <td>{{$t6->nilai_kbm}}</td>
                          <td>{{$t6->ID_KI}}</td>
                          <td>{{$t6->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t6->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t6->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir7 as $t7)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t7->nama_siswa}}</td>
                          <td>{{$t7->nama_matapelajaran}}</td>
                          <td>{{$t7->nilai_kbm}}</td>
                          <td>{{$t7->ID_KI}}</td>
                          <td>{{$t7->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t7->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t7->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir8 as $t8)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t8->nama_siswa}}</td>
                          <td>{{$t8->nama_matapelajaran}}</td>
                          <td>{{$t8->nilai_kbm}}</td>
                          <td>{{$t8->ID_KI}}</td>
                          <td>{{$t8->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t8->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t8->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir9 as $t9)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t9->nama_siswa}}</td>
                          <td>{{$t9->nama_matapelajaran}}</td>
                          <td>{{$t9->nilai_kbm}}</td>
                          <td>{{$t9->ID_KI}}</td>
                          <td>{{$t9->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t9->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t9->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir10 as $t10)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t10->nama_siswa}}</td>
                          <td>{{$t10->nama_matapelajaran}}</td>
                          <td>{{$t10->nilai_kbm}}</td>
                          <td>{{$t10->ID_KI}}</td>
                          <td>{{$t10->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t10->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t10->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir11 as $t11)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t11->nama_siswa}}</td>
                          <td>{{$t11->nama_matapelajaran}}</td>
                          <td>{{$t11->nilai_kbm}}</td>
                          <td>{{$t11->ID_KI}}</td>
                          <td>{{$t11->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t11->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t11->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir12 as $t12)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t12->nama_siswa}}</td>
                          <td>{{$t12->nama_matapelajaran}}</td>
                          <td>{{$t12->nilai_kbm}}</td>
                          <td>{{$t12->ID_KI}}</td>
                          <td>{{$t12->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t12->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t12->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
        <h3>Tambah Data Rapor Akhir Semester
          <ul class="nav navbar-right panel_toolbox">
          <a role="button" class="btn btn-primary" href="{{url('/bukuphb/create')}}">
            <i class="fa fa-user-plus"></i> Add
          </a>
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

                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>Mata Pelajaran</th>
                          <th>KBM</th>
                          <th>KI</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($raporakhir13 as $t13)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$t13->nama_siswa}}</td>
                          <td>{{$t13->nama_matapelajaran}}</td>
                          <td>{{$t13->nilai_kbm}}</td>
                          <td>{{$t13->ID_KI}}</td>
                          <td>{{$t13->NILAI_AKHIR}}</td>
                          <td>A</td>
                          <td>{{$t13->DESKRIPSI}}</td>
                          <td>
                            <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t13->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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