@section('title')
    <title>Rapor Tengah Semester</title>
@endsection

@extends('index')

@section('konten')

<div class="col-md-12 col-sm-12">

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

</div>

@endsection