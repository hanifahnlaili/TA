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
              <form action="{{ url('/menu_raportengah/store') }}" method="POST">
                @method('POST')
                @csrf

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Pilih Siswa </label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" id="nomor_induk" name="nomor_induk">
                      @foreach($siswa as $s)
                      <option value="{{ $s->nomor_induk }}">
                        {{ $s->nama_siswa }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Pilih Kompetensi Dasar</label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" id="id_kd" name="id_kd">
                      @foreach($kd as $kd)
                      <option value="{{ $kd->id_kd }}">{{ $kd->detail_kd }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai Harian 1</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai Harian 1" name="nilai_harian1">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai Harian 2</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai Harian 2" name="nilai_harian2">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;">Nilai PTS</label>
                  </div>
                  <div class="col md-6">
                    <input type="number" class="form-control" placeholder="Nilai PTS" name="nilai_PTS">
                  </div>
                </div>
                <br>

                <!-- <div class="row">
                  <div class="col-sm-4">
                    <label style="font-size: medium;"> Pilih Range Nilai</label>
                  </div>
                  <div class="col md-6">
                    <select class="form-control" id="id_range_nilai" name="id_range_nilai">
                      
                    </select>
                  </div>
                </div> -->
                <br>

                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

              </form>
            </div>
            
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
                          <th style="vertical-align:middle">Nama KD</th>
                          <th style="vertical-align:middle">Detail Kompetensi Dasar</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai Harian 1</th>
                          <th style="vertical-align:middle">Nilai Harian 2</th>
                          <th style="vertical-align:middle">Rata-rata Nilai Harian 1 & 2</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
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
                            <td>{{$t->nilai_harian1}}</td>
                            <td>
                              @if($t->nilai_harian2 == null) 
                              - 
                              @endif
                            </td>
                            <td>{{ ($t->nilai_harian1 + $t->nilai_harian2) /2 }}</td>
                            <td>{{$t->nilai_PTS}}</td>
                            <td>
                              @if($t->range_huruf == null) 
                              - 
                              @endif
                            </td>
                            <td>{{$t->keterangan}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
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
          <a role="button" class="btn btn-primary" href="{
            {url('/bukuphb/create')}}">
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">Nama KD</th>
                          <th style="vertical-align:middle">Detail Kompetensi Dasar</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai Harian 1</th>
                          <th style="vertical-align:middle">Nilai Harian 2</th>
                          <th style="vertical-align:middle">Rata-rata Nilai Harian 1 & 2</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
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
                          <td>{{$t1->nilai_harian1}}</td>
                          <td>
                            @if($t1->nilai_harian2 == null) 
                            - 
                            @endif
                          </td>
                          <td>{{ ($t1->nilai_harian1 + $t1->nilai_harian2) /2 }}</td>
                          <td>{{$t1->nilai_PTS}}</td>
                          <td>
                            @if($t1->range_huruf == null) 
                            - 
                            @endif
                          </td>
                          <td>{{$t1->keterangan}}</td>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">Nama KD</th>
                          <th style="vertical-align:middle">Detail Kompetensi Dasar</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai Harian 1</th>
                          <th style="vertical-align:middle">Nilai Harian 2</th>
                          <th style="vertical-align:middle">Rata-rata Nilai Harian 1 & 2</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
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
                          <td>{{$t2->nilai_harian1}}</td>
                          <td>
                            @if($t2->nilai_harian2 == null) 
                            - 
                            @endif
                          </td>
                          <td>{{ ($t2->nilai_harian1 + $t2->nilai_harian2) /2 }}</td>
                          <td>{{$t2->nilai_PTS}}</td>
                          <td>
                            @if($t2->range_huruf == null) 
                            - 
                            @endif
                          </td>
                          <td>{{$t2->keterangan}}</td>
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
                                                        
                    <table class="datatable table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="vertical-align:middle">Nomor</th>
                          <th style="vertical-align:middle">Nama Siswa</th>
                          <th style="vertical-align:middle">Nama KD</th>
                          <th style="vertical-align:middle">Detail Kompetensi Dasar</th>
                          <th style="vertical-align:middle">KBM</th>
                          <th style="vertical-align:middle">Nilai Harian 1</th>
                          <th style="vertical-align:middle">Nilai Harian 2</th>
                          <th style="vertical-align:middle">Rata-rata Nilai Harian 1 & 2</th>
                          <th style="vertical-align:middle">Nilai PTS</th>
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
                          <td>{{$t3->NILAI_HARIAN1}}</td>
                          <td>
                            @if($t3->NILAI_HARIAN2 == null) 
                            - 
                            @else
                            {{$t3->NILAI_HARIAN2}}
                            @endif
                          </td>
                          <td>{{ ($t3->NILAI_HARIAN1 + $t3->NILAI_HARIAN2) /2 }}</td>
                          <td>{{$t3->NILAI_PTS}}</td>
                          <td>
                            @if( ($t3->NILAI_HARIAN1 + $t3->NILAI_HARIAN2) /2 >= 93 ) 
                            A
                            @elseif( ($t3->NILAI_HARIAN1 + $t3->NILAI_HARIAN2) /2 >= 84 )
                            B
                            @elseif( ($t3->NILAI_HARIAN1 + $t3->NILAI_HARIAN2) /2 >= 75 )
                            C
                            @else( ($t3->NILAI_HARIAN1 + $t3->NILAI_HARIAN2) /2 == null )
                            - 
                            @endif
                          </td>
                          <td>{{$t3->keterangan}}</td>
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

    

  </div>
</div>   

@endsection

