@section('title')
    <title>Kompetensi Dasar Kelas 3</title>
@endsection

@extends('home')

@section('konten')

<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_panel">
              <h3 style="margin-top: 30px;">Cetak Kompetensi Dasar
                <ul class="nav navbar-right panel_toolbox">
                <a class="btn btn-app" href="{{url('/kompetensidasar/cetakpdf')}}">
                  <i class="fa fa-save"></i> Print
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
                                  <th rowspan="7">Tools</th>
                                  <th rowspan="7">ID Kompetensi Dasar</th>
                                  <th rowspan="7">Nama Mata Pelajaran</th>
                                  <th rowspan="7">Kompetensi Inti</th>
                                  <th>Detail Kompetensi Dasar</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($kompetensidasar as $k)
                                <tr>
                                  <td rowspan="7"> 
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd}}</td>
                                  <!-- <td>{{$k->detail_kd1}}</td>
                                  <td>{{$k->detail_kd2}}</td>
                                  <td>{{$k->detail_kd3}}</td>
                                  <td>{{$k->detail_kd4}}</td>
                                  <td>{{$k->detail_kd5}}</td>
                                  <td>{{$k->detail_kd6}}</td> -->
                                </tr>
                                <tr>
                                  <td rowspan="7">
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd1}}</td>
                                </tr>
                                <tr>
                                <td rowspan="7">
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd2}}</td>
                                </tr>
                                <tr>
                                <td rowspan="7">
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd3}}</td>
                                </tr>
                                <tr>
                                <td rowspan="7">
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd4}}</td>
                                </tr>
                                <tr>
                                <td rowspan="7">
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd5}}</td>
                                </tr>
                                <tr>
                                <td rowspan="7">
                                    <a href="{{ url('/kompetensidasar/edit/'.$k->id_kd) }}" class="btn btn-info btn-sm">Edit</a>
                                  </td>
                                  <td rowspan="7">{{$k->id_kd}}</td>
                                  <td rowspan="7">{{$k->nama_mapel}}</td>
                                  <td rowspan="7">{{$k->nama_ki}}</td>
                                  <td>{{$k->detail_kd6}}</td>
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