@section('title')
    <title>Nilai Buku Penghubung Kelas 3 Sunflower</title>
@endsection

@extends('home')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

              <div class="x_panel">
              <h3 style="margin-top: 30px;">Tambah dan Cetak Nilai Buku Penghubung 
                <ul class="nav navbar-right panel_toolbox">
                <a class="btn btn-app" href="{{url('/bukuphb/create')}}">
                  <i class="fa fa-user-plus"></i> Add
                </a>
                <a class="btn btn-app" href="{{url('/bukuphb/cetakpdf')}}">
                  <i class="fa fa-save"></i> Print
                </a>
                </ul>
              </h3>
              </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h3>Tabel Rekap Nilai Buku Penghubung Kelas 3 Sunflower</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                                                 
                              <table id="datatable" class="table table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>ID Nilai Buku Penghubung</th>
                                    <th>Nama Siswa</th>
                                    <th>Nilai Guru Spiritual</th>
                                    <th>Nilai Guru Sosial</th>
                                    <th>Nilai Orang Tua Spiritual</th>
                                    <th>Nilai Orang Tua Sosial</th>
                                    <th>Rata-rata Spiritual</th>
                                    <th>Rata-rata Sosial</th>
                                    <th>Tools</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($bukuphb as $b)
                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$b->id_nbp}}</td>
                                    <td>{{$b->nama_siswa}}</td>
                                    <td>{{$b->guru_spiritual}}</td>
                                    <td>{{$b->guru_sosial}}</td>
                                    <td>{{$b->ortu_spiritual}}</td>
                                    <td>{{$b->ortu_sosial}}</td>
                                    <td>{{$avgspiritual}}</td>
                                    <td>{{$avgsosial}}</td>
                                    <td>
                                      <a href="{{ url('/bukuphb/edit/'.$b->id_nbp) }}" class="btn btn-info btn-sm">Edit</a>
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