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
                <a role="button" class="btn btn-primary" href="{{url('/kompetensidasar/cetakpdf')}}">
                  <i class="fas fa-plus-square"></i> Add
                </a>
                </ul>
              </h3>
              </div>

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
                              @foreach($kompetensi_dasar as $k)
                                <tr>
                                  <td>{{$k->id_kd}}</td>
                                  <td>{{$k->nama_matapelajaran}}</td>
                                  <td>{{$k->nama_ki}}</td>
                                  <td>{{$k->nama_kd}}</td>
                                  <td>{{$k->detail_kd}}</td>
                                  <td> 
                                    <a href="{{ url('/kompetensi_dasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
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