@section('title')
    <title>Daftar User</title>
@endsection

@extends('index')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_panel">
              <h3>Tambah User Baru
                <ul class="nav navbar-right panel_toolbox">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#adduser">
                  <i class="fas fa-user-plus"></i> Add
                </button>
                </ul>
              </h3>
              </div>

              <!-- Modal -->
              @foreach($users as $b)
              <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
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
                            <label style="font-size: medium;">Pilih Pegawai </label>
                          </div>
                          <div class="col md-6">
                            <select class="form-control" id="">
                              <option>Nama pegawai</option>
                            </select>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Tipe User</label>
                          </div>
                          <div class="col md-6">
                            <select class="form-control" id="">
                              <option>Admin</option>
                            </select>
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Nama</label>
                          </div>
                          <div class="col md-6">
                            <input type="text" class="form-control" placeholder="Nama">
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Email</label>
                          </div>
                          <div class="col md-6">
                            <input type="email" class="form-control" placeholder="Email">
                          </div>
                        </div>
                        <br>

                        <div class="row">
                          <div class="col-sm-4">
                            <label style="font-size: medium;">Password</label>
                          </div>
                          <div class="col md-6">
                            <input type="text" class="form-control" placeholder="Password">
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
                    <h3>Tabel User</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <br>

                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th style="vertical-align:middle">ID User</th>
                                    <th style="vertical-align:middle">Nama Pegawai</th>
                                    <th style="vertical-align:middle">Tipe User</th>
                                    <th style="vertical-align:middle">Email</th>
                                    <th style="vertical-align:middle">Password</th>
                                    <th style="vertical-align:middle">Tools</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $u)
                                  <tr>
                                    <td>{{$u->id_user}}</td>
                                    <td>{{$u->nama_pegawai}}</td>
                                    <td>{{$u->tipe_user}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->password}}</td>
                                    <td>
                                    <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{url('/user/edit/'.$u->id_user)}}"><i class="fa fa-edit"></i></a>
	                                </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                              <br>
                              
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection