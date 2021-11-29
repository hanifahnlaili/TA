@section('title')
    <title>Nilai Buku Penghubung</title>
@endsection

@extends('index')

@section('konten')
<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
  <h3>Tambah Data Nilai Buku Penghubung 
    <ul class="nav navbar-right panel_toolbox">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addbukupenghubung">
      <i class="fas fa-plus-circle"></i> Add
    </button>
    </ul>
  </h3>
  </div>

  <!-- Modal -->
  @foreach($buku_penghubung as $b)
  <div class="modal fade" id="addbukupenghubung" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Buku Penghubung</h5>
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
                <label style="font-size: medium;">Nilai Guru Spiritual</label>
              </div>
              <div class="col md-6">
                <input type="number" class="form-control" placeholder="Nilai Guru Spiritual">
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-4">
                <label style="font-size: medium;">Nilai Ortu Spiritual</label>
              </div>
              <div class="col md-6">
                <input type="number" class="form-control" placeholder="Nilai Ortu Spiritual">
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-4">
                <label style="font-size: medium;">Nilai Guru Sosial</label>
              </div>
              <div class="col md-6">
                <input type="number" class="form-control" placeholder="Nilai Guru Sosial">
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-4">
                <label style="font-size: medium;">Nilai Ortu Sosial</label>
              </div>
              <div class="col md-6">
                <input type="number" class="form-control" placeholder="Nilai Ortu Sosial">
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
        <h3>Tabel Rekap Nilai Buku Penghubung</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                                                      
                  <table id="datatable" class="table table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th style="vertical-align:middle">ID Nilai Buku Penghubung</th>
                        <th style="vertical-align:middle">Nama Siswa</th>
                        <th style="vertical-align:middle">Nilai Guru Spiritual</th>
                        <th style="vertical-align:middle">Nilai Orang Tua Spiritual</th>
                        <th style="vertical-align:middle">Rata-rata Spiritual</th>
                        <th style="vertical-align:middle">Nilai Guru Sosial</th>
                        <th style="vertical-align:middle">Nilai Orang Tua Sosial</th>
                        <th style="vertical-align:middle">Rata-rata Sosial</th>
                        <th style="vertical-align:middle">Deskripsi</th>
                        <th style="vertical-align:middle">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($buku_penghubung as $b)
                      <tr>
                        <td>{{$b->ID_NBP}}</td>
                        <td>{{$b->nama_siswa}}</td>
                        <td>{{$b->GURU_SPIRITUAL}}</td>
                        <td>{{$b->ORTU_SPIRITUAL}}</td>
                        <td>{{$avgspiritual}}</td>
                        <td>{{$b->GURU_SOSIAL}}</td>
                        <td>{{$b->ORTU_SOSIAL}}</td>
                        <td>{{$avgsosial}}</td>
                        <td>{{$b->DESKRIPSI}}</td>
                        <td>
                          <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$b->ID_NBP) }}"><i class="fa fa-edit"></i></a>
                          <a role="button" class="btn btn-info tooltip-test" data-toggle="modal" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$b->ID_NBP) }}"><i class="fa fa-info-circle"></i></a>
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