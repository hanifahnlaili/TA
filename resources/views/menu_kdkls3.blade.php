@section('title')
    <title>Kompetensi Dasar Kelas 3</title>
@endsection

@extends('index')

@section('konten')

<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_panel">
              <h3>Tambah Kompetensi Dasar
                <ul class="nav navbar-right panel_toolbox">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addkd">
                  <i class="fas fa-plus-square"></i> Add
                </button>
                </ul>
              </h3>
              </div>

              <!-- Modal -->
              @foreach($kd as $b)
              <div class="modal fade" id="addkd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Kompetensi Dasar</h5>
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
                            <label style="font-size: medium;">Pilih Mata Pelajaran </label>
                          </div>
                          <div class="col md-6">
                            <select class="form-control" id="">
                              <option>Nama Mata Pelajaran</option>
                            </select>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Pilih Tahun Pelajaran</label>
                          </div>
                          <div class="col md-6">
                            <select class="form-control" id="">
                              <option>Tahun Pelajaran</option>
                            </select>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Pilih KI</label>
                          </div>
                          <div class="col md-6">
                            <select class="form-control" id="">
                              <option>KI - 3</option>
                            </select>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Nama Kompetensi Dasar</label>
                          </div>
                          <div class="col md-6">
                            <input type="text" class="form-control" placeholder="Nama Kompetensi Dasar">
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Detail Kompetensi Dasar</label>
                          </div>
                          <div class="col md-6">
                            <input type="text" class="form-control" placeholder="Detail Kompetensi Dasar">
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
                    <h3>Tabel Kompetensi Dasar Kelas 3</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
        
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                <tr>
                                  <th style="vertical-align:middle">ID Kompetensi Dasar</th>
                                  <th style="vertical-align:middle">Nama Mata Pelajaran</th>
                                  <th style="vertical-align:middle">Kompetensi Inti</th>
                                  <th style="vertical-align:middle">Nama Kompetensi Dasar</th>
                                  <th style="vertical-align:middle">Detail Kompetensi Dasar</th>
                                  <th style="vertical-align:middle">Tools</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($kd as $k)
                                <tr>
                                  <td>{{$k->ID_KD}}</td>
                                  <td>{{$k->nama_matapelajaran}}</td>
                                  <td>{{$k->ID_KI}}</td>
                                  <td>{{$k->NAMA_KD}}</td>
                                  <td>{{$k->DETAIL_KD}}</td>
                                  <td> 
                                    <a href="{{ url('/kompetensi_dasar/edit/'.$k->ID_KD) }}" class="btn btn-info btn-sm">Edit</a>
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