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
  @foreach($raporakhir as $b)
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
                <label style="font-size: medium;">Pilih Kompetensi Inti</label>
              </div>
              <div class="col md-6">
                <select class="form-control" id="">
                  <option>Nama Kompetensi Inti</option>
                </select>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-4">
                <label style="font-size: medium;">Nilai Akhir</label>
              </div>
              <div class="col md-6">
                <input type="number" class="form-control" placeholder="Nilai Akhir">
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-4">
                <label style="font-size: medium;">Deskripsi</label>
              </div>
              <div class="col md-6">
                <input type="text" class="form-control" placeholder="Deskripsi">
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
        <h3>Tabel Rapor Akhir Semester</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                                                      
                  <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                      <tr style="text-align:center">
                        <th>Nomor</th>
                        <th>Nama Siswa</th>
                        <th>Mata Pelajaran</th>
                        <th>KBM</th>
                        <th>KI</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                        <th>Tools</th>
                        <!-- <th style="vertical-align:middle" rowspan="2">Nomor</th>
                        <th style="vertical-align:middle" rowspan="2">Nama Siswa</th>
                        <th style="vertical-align:middle" rowspan="2">Mata Pelajaran</th>
                        <th style="vertical-align:middle" rowspan="2">KBM</th>
                        <th style="vertical-align:middle" colspan="3">Pengetahuan (KI-3)</th>
                        <th style="vertical-align:middle" colspan="3">Keterampilan (KI-4)</th>
                        <th style="vertical-align:middle" rowspan="2">Tools</th>
                      </tr>
                      <tr>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th> -->
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
                        <td>{{$a->NILAI_AKHIR}}</td>
                        <td>A</td>
                        <td>{{$a->DESKRIPSI}}</td>
                        <td>
                          <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$b->ID_KOMPONEN) }}"><i class="fa fa-edit"></i></a>
                          <!-- <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$b->ID_KOMPONEN) }}"><i class="fa fa-info-circle"></i></a> -->
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