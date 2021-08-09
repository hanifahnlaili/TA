@section('title')
    <title>Siswa Kelas 3 Sunflower</title>
@endsection

@extends('index')

@section('konten')


<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
    <h3>Tambah Data Siswa
      <ul class="nav navbar-right panel_toolbox">
      <a class="btn btn-primary" href="{{url('/siswa/create')}}">
        <i class="fas fa-user-plus"></i>  Add
      </a>
      </ul>
    </h3>
  </div>

  <div class="x_panel">
    <div class="x_title">
      <h3>Tabel Siswa Kelas 3 Sunflower</h3>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
          <div class="col-sm-12">
              <div class="card-box table-responsive">

              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th style="vertical-align:middle">Nomor Induk</th>
                    <th style="vertical-align:middle">NISN Siswa</th>
                    <th style="vertical-align:middle">Nama siswa</th>
                    <th style="vertical-align:middle">Alamat</th>
                    <th style="vertical-align:middle">Telepon</th>
                    <th style="vertical-align:middle">Diterima Dikelas</th>
                    <th style="vertical-align:middle">Tanggal Diterima Dikelas</th>
                    <th style="vertical-align:middle">Foto</th>
                    <th style="vertical-align:middle">Tools</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($siswa as $t)
                  <tr>
                    <td>{{$t->NOMOR_INDUK}}</td>
                    <td>{{$t->NISN_SISWA}}</td>
                    <td>{{$t->NAMA_SISWA}}</td>
                    <td>{{$t->ALAMAT}}</td>
                    <td>{{$t->TELEPON}}</td>
                    <td>{{$t->DITERIMA_DIKELAS}}</td>
                    <td>{{$t->TANGGAL_DITERIMA_DIKELAS}}</td>
                    <td>{{$t->FOTO}}</td>
                    <td align="center">
                      <a role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Siswa" href="{{ url('/siswa/edit/'.$t->NOMOR_INDUK) }}"><i class="fa fa-edit"></i></a>  
                      <button type="button" class="btn btn-info" title="Detail Siswa" data-toggle="modal" data-target="#detailsiswa_{{ $t->NOMOR_INDUK }}"><i class="fa fa-info-circle"></i></button>
                      <!-- <form action="{{ url('siswa/delete/'.$t->NOMOR_INDUK) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Siswa"><i class="fa fa-trash"></i></button>
                      </form> -->
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

  <!-- Modal -->
  @foreach ($siswa as $t)
    <div class="modal fade" id="detailsiswa_{{ $t->NOMOR_INDUK }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Data Diri Siswa #{{$t->NOMOR_INDUK}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                
                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">1. &emsp; Nama Lengkap Siswa</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->NAMA_SISWA}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">2. &emsp; Nomor Induk/NISN</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->NOMOR_INDUK}}/{{$t->NISN_SISWA}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">3. &emsp; Jenis Kelamin</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->JENIS_KELAMIN}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">4. &emsp; Tempat dan Tanggal Lahir</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->TEMPAT_TANGGAL_LAHIR}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">5. &emsp; Agama</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->AGAMA}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">6. &emsp; Anak ke</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->ANAK_KE}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">7. &emsp; Status dalam keluarga</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->STATUS_DALAM_KELUARGA}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">8. &emsp; Alamat Siswa</p>
                    <p style="font-size: medium;">&emsp;&emsp; Telepon Rumah</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->ALAMAT}}</p>
                    <p style="font-size: medium;">: {{$t->TELEPON}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">9. &emsp; Diterima di Sekolah ini</p>
                    <p style="font-size: medium;">&emsp;&emsp; a.&emsp; Di Kelas</p>
                    <p style="font-size: medium;">&emsp;&emsp; b.&emsp; Pada Tanggal</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">&nbsp;</p>
                    <p style="font-size: medium;">: {{$t->DITERIMA_DIKELAS}}</p>
                    <p style="font-size: medium;">: {{$t->TANGGAL_DITERIMA_DIKELAS}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">10.&emsp;Asal Sekolah</p>
                    <p style="font-size: medium;">&emsp;&emsp; a.&emsp; Nama Sekolah</p>
                    <p style="font-size: medium;">&emsp;&emsp; b.&emsp; Alamat</p>
                    <p style="font-size: medium;">&emsp;&emsp; c.&emsp; Telepon</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">&nbsp;</p>
                    <p style="font-size: medium;">: {{$t->NAMA_SEKOLAH}}</p>
                    <p style="font-size: medium;">: {{$t->ALAMAT_SEKOLAH}}</p>
                    <p style="font-size: medium;">: {{$t->TELEPON_SEKOLAH}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">11.&emsp;Nama Orang Tua</p>
                    <p style="font-size: medium;">&emsp;&emsp; a.&emsp; Ayah</p>
                    <p style="font-size: medium;">&emsp;&emsp; b.&emsp; Ibu</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">&nbsp;</p>
                    <p style="font-size: medium;">: {{$t->NAMA_AYAH}}</p>
                    <p style="font-size: medium;">: {{$t->NAMA_IBU}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">12.&emsp;Alamat Orang Tua</p>
                    <p style="font-size: medium;">&emsp;&emsp; Telepon</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->ALAMAT_ORTU}}</p>
                    <p style="font-size: medium;">: {{$t->TELEPON_AYAH}}/{{$t->TELEPON_IBU}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">13. &emsp;Pekerjaan Orang Tua</p>
                    <p style="font-size: medium;">&emsp;&emsp; a.&emsp; Ayah</p>
                    <p style="font-size: medium;">&emsp;&emsp; b.&emsp; Ibu</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">&nbsp;</p>
                    <p style="font-size: medium;">: {{$t->PEKERJAAN_AYAH}}</p>
                    <p style="font-size: medium;">: {{$t->PEKERJAAN_IBU}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">14. &emsp;Nama Wali</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->NAMA_WALI}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">15. &emsp;Alamat Wali</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->ALAMAT_WALI}}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <p style="font-size: medium;">16. &emsp;Pekerjaan Wali</p>
                  </div>
                  <div class="col md-6">
                    <p style="font-size: medium;">: {{$t->PEKERJAAN_WALI}}</p>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <a target="_blank" href="{{url('/admin/cetaksiswakls3sunflo/'.$t->NOMOR_INDUK)}}">
                  <button type="button" class="btn btn-success"><i class="fas fa-print"></i> Print</button>
                </a>
              </div>
            
          </div>
        </div>    
      </div>    
    </div>      
  @endforeach

</div>
                
@endsection