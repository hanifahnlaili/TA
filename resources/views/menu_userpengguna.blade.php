@section('title')
    <title>Daftar User</title>
@endsection

@extends('home')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_panel">
              <h3 style="margin-top: 30px;">Tambah User Baru
                <ul class="nav navbar-right panel_toolbox">
                <a class="btn btn-app" href="/user/create">
                  <i class="fa fa-user-plus">
                  </i>
                </a></ul></h3>
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
                                    <th>ID User</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama Tipe User</th>
                                    <th>Tools</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($userpengguna as $u)
                                  <tr>
                                    <td>{{$u->id_user}}</td>
                                    <td>{{$u->username}}</td>
                                    <td>{{$u->password}}</td>
                                    <td>{{$u->nama_tipe_user}}</td>
                                    <td>
                                    <a href="{{url('/user/edit/'.$u->id_user)}}" class="btn btn-info btn-sm">Edit</a>
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