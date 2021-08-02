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
                <a class="btn btn-primary" href="/user/create">
                  <i class="fas fa-user-plus"></i> Add
                </a>
                </ul>
              </h3>
              </div>

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