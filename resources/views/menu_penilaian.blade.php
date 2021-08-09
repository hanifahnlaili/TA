@section('title')
    <title>Penilaian Individu Siswa</title>
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
                <a class="nav-link" id="pills-kepribadian-tab" data-toggle="pill" href="#pills-kepribadian" role="tab" aria-controls="pills-kepribadian" aria-selected="false">Kepribadian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-ekstrakurikuler-tab" data-toggle="pill" href="#pills-ekstrakurikuler" role="tab" aria-controls="pills-ekstrakurikuler" aria-selected="false">Ekstrakurikuler</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-kondisikesehatan-tab" data-toggle="pill" href="#pills-kondisikesehatan" role="tab" aria-controls="pills-kondisikesehatan" aria-selected="false">Kondisi Kesehatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-perkembanganfisik-tab" data-toggle="pill" href="#pills-perkembanganfisik" role="tab" aria-controls="pills-perkembanganfisik" aria-selected="false">Perkembangan Fisik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-prestasi-tab" data-toggle="pill" href="#pills-prestasi" role="tab" aria-controls="pills-prestasi" aria-selected="false">Prestasi</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

              <!-- Presensi -->
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="x_panel">
                  <h3>Tambah Presensi
                    <ul class="nav navbar-right panel_toolbox">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpresensi">
                      <i class="fas fa-plus-circle"></i> Add
                    </button>
                    </ul>
                  </h3>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addpresensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Presensi</h5>
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
                              <label style="font-size: medium;">Jumlah Sakit</label>
                            </div>
                            <div class="col md-6">
                              <input type="number" class="form-control" placeholder="Sakit">
                            </div>
                          </div>
                          <br>

                          <div class="row">
                            <div class="col-sm-4">
                              <label style="font-size: medium;">Jumlah Ijin</label>
                            </div>
                            <div class="col md-6">
                              <input type="number" class="form-control" placeholder="Ijin">
                            </div>
                          </div>
                          <br>

                          <div class="row">
                            <div class="col-sm-4">
                              <label style="font-size: medium;">Jumlah Absen</label>
                            </div>
                            <div class="col md-6">
                              <input type="number" class="form-control" placeholder="Absen">
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

                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Presensi</h3>
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
                              <td>{{$p->ID_PRESENSI}}</td>
                              <td>{{$p->nama_siswa}}</td>
                              <td>{{$p->SAKIT}}</td>
                              <td>{{$p->IJIN}}</td>
                              <td>{{$p->ABSEN}}</td>
                              <td>
                              <a href="{{ url('/presensi/edit/'.$p->ID_PRESENSI) }}" class="btn btn-info btn-sm">Edit</a>
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

              <!-- Kepribadian -->
              <div class="tab-pane fade" id="pills-kepribadian" role="tabpanel" aria-labelledby="pills-kepribadian-tab">
                <div class="x_panel">
                  <h3>Tambah Kepribadian
                    <ul class="nav navbar-right panel_toolbox">
                    <a role="button" class="btn btn-info" href="{{url('/presensi/create')}}">
                      <i class="fa fa-user-plus"></i> Add
                    </a>
                    <!-- <a class="btn btn-app" href="{{url('/presensi/cetakpdf')}}">
                      <i class="fa fa-save"></i> Print
                    </a> -->
                    </ul>
                  </h3>
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Kepribadian</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
    
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th style="vertical-align:middle">ID Kepribadian</th>
                              <th style="vertical-align:middle">Nama Siswa</th>
                              <th style="vertical-align:middle">Sikap</th>
                              <th style="vertical-align:middle">Kerajinan</th>
                              <th style="vertical-align:middle">Kebersihan dan Kerapian</th>
                              <th style="vertical-align:middle">Tools</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($kepribadian as $kep)
                            <tr>
                              <td>{{$kep->id_kepribadian}}</td>
                              <td>{{$kep->nama_siswa}}</td>
                              <td>{{$kep->sikap}}</td>
                              <td>{{$kep->kerajinan}}</td>
                              <td>{{$kep->kebersihan_dan_kerapian}}</td>
                              <td>
                              <a href="{{ url('/presensi/edit/'.$kep->id_kepribadian) }}" class="btn btn-info btn-sm">Edit</a>
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

              <!-- Ekstrakurikuler -->
              <div class="tab-pane fade" id="pills-ekstrakurikuler" role="tabpanel" aria-labelledby="pills-ekstrakurikuler-tab">
                <div class="x_panel">
                  <h3>Tambah Ekstrakurikuler
                    <ul class="nav navbar-right panel_toolbox">
                    <a role="button" class="btn btn-info" href="{{url('/presensi/create')}}">
                      <i class="fa fa-user-plus"></i> Add
                    </a>
                    <!-- <a class="btn btn-app" href="{{url('/presensi/cetakpdf')}}">
                      <i class="fa fa-save"></i> Print
                    </a> -->
                    </ul>
                  </h3>
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Ekstrakurikuler</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
    
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th style="vertical-align:middle">ID Ekstrakurikuler</th>
                              <th style="vertical-align:middle">Nama Siswa</th>
                              <th style="vertical-align:middle">Kegiatan</th>
                              <th style="vertical-align:middle">Capaian</th>
                              <th style="vertical-align:middle">Deskripsi</th>
                              <th style="vertical-align:middle">Tools</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($ekstrakurikuler as $eks)
                            <tr>
                              <td>{{$eks->id_ekstrakurikuler}}</td>
                              <td>{{$eks->nama_siswa}}</td>
                              <td>{{$eks->kegiatan}}</td>
                              <td>{{$eks->capaian}}</td>
                              <td>{{$eks->deskripsi}}</td>
                              <td>
                              <a href="{{ url('/presensi/edit/'.$eks->id_ekstrakurikuler) }}" class="btn btn-info btn-sm">Edit</a>
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

              <!-- Kondisi Kesehatan -->
              <div class="tab-pane fade" id="pills-kondisikesehatan" role="tabpanel" aria-labelledby="pills-kondisikesehatan-tab">
                <div class="x_panel">
                  <h3>Tambah Kondisi Kesehatan
                    <ul class="nav navbar-right panel_toolbox">
                    <a role="button" class="btn btn-info" href="{{url('/presensi/create')}}">
                      <i class="fa fa-user-plus"></i> Add
                    </a>
                    </ul>
                  </h3>
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Kondisi Kesehatan</h3>
                    <div class="clearfix"></div>
                  </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
      
                          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th style="vertical-align:middle">ID Kondisi Kesehatan</th>
                                <th style="vertical-align:middle">Nama Siswa</th>
                                <th style="vertical-align:middle">Semester</th>
                                <th style="vertical-align:middle">Pendengaran</th>
                                <th style="vertical-align:middle">Penglihatan</th>
                                <th style="vertical-align:middle">Gigi</th>
                                <th style="vertical-align:middle">Lainnya</th>
                                <th style="vertical-align:middle">Tools</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($kondisi_kesehatan as $kk)
                              <tr>
                                <td>{{$kk->id_kondisi_kesehatan}}</td>
                                <td>{{$kk->nama_siswa}}</td>
                                <td>{{$kk->semester}}</td>
                                <td>{{$kk->pendengaran}}</td>
                                <td>{{$kk->penglihatan}}</td>
                                <td>{{$kk->gigi}}</td>
                                <td>{{$kk->lainnya}}</td>
                                <td>
                                <a href="{{ url('/presensi/edit/'.$kk->id_kondisi_kesehatan) }}" class="btn btn-info btn-sm">Edit</a>
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

              <!-- Perkembangan Fisik -->
              <div class="tab-pane fade" id="pills-perkembanganfisik" role="tabpanel" aria-labelledby="pills-perkembanganfisik-tab">
                <div class="x_panel">
                  <h3>Tambah Perkembangan Fisik
                    <ul class="nav navbar-right panel_toolbox">
                    <a role="button" class="btn btn-info" href="{{url('/presensi/create')}}">
                      <i class="fa fa-user-plus"></i> Add
                    </a>
                    </ul>
                  </h3>
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Perkembangan Fisik</h3>
                    <div class="clearfix"></div>
                  </div>  
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
    
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th style="vertical-align:middle">ID Perkembangan Fisik</th>
                              <th style="vertical-align:middle">Nama Siswa</th>
                              <th style="vertical-align:middle">Semester</th>
                              <th style="vertical-align:middle">Tinggi Badan</th>
                              <th style="vertical-align:middle">Berat Badan</th>
                              <th style="vertical-align:middle">Tools</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($perkembangan_fisik as $pf)
                            <tr>
                              <td>{{$pf->id_perkembangan_fisik}}</td>
                              <td>{{$pf->nama_siswa}}</td>
                              <td>{{$pf->semester}}</td>
                              <td>{{$pf->tinggi_badan}}</td>
                              <td>{{$pf->berat_badan}}</td>
                              <td>
                              <a href="{{ url('/presensi/edit/'.$pf->id_perkembangan_fisik) }}" class="btn btn-info btn-sm">Edit</a>
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

              <!-- Prestasi -->
              <div class="tab-pane fade" id="pills-prestasi" role="tabpanel" aria-labelledby="pills-prestasi-tab">
                <div class="x_panel">
                  <h3>Tambah Prestasi
                    <ul class="nav navbar-right panel_toolbox">
                      <a role="button" class="btn btn-info" href="{{url('/presensi/create')}}">
                        <i class="fa fa-user-plus"></i> Add
                      </a>
                    </ul>
                  </h3>
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Prestasi</h3>
                    <div class="clearfix"></div>
                  </div>  
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
    
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th style="vertical-align:middle">ID Prestasi</th>
                              <th style="vertical-align:middle">Nama Siswa</th>
                              <th style="vertical-align:middle">Catatan</th>
                              <th style="vertical-align:middle">Keterangan</th>
                              <th style="vertical-align:middle">Tools</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($prestasi as $pts)
                            <tr>
                              <td>{{$pts->id_prestasi}}</td>
                              <td>{{$pts->nama_siswa}}</td>
                              <td>{{$pts->catatan}}</td>
                              <td>{{$pts->keterangan}}</td>
                              <td>
                              <a href="{{ url('/presensi/edit/'.$pts->id_prestasi) }}" class="btn btn-info btn-sm">Edit</a>
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
      </div>
</div>

@endsection