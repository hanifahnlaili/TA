@section('title')
    <title>Siswa Kelas 3 Sunflower</title>
@endsection

@extends('index')

@section('konten')


<div class="col-md-12 col-sm-12 ">

  <div class="x_panel">
  <h3 style="margin-top: 30px;">Tambah dan Cetak Tabel Siswa
    <ul class="nav navbar-right panel_toolbox">
    <a class="btn btn-app" href="{{url('/siswa/create')}}">
      <i class="fa fa-user-plus"></i> Add
    </a>
    <a class="btn btn-app" href="{{url('/siswa/cetakpdf')}}">
      <i class="fa fa-save"></i> Print
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
                      <th>Nomor Induk</th>
                      <th>NISN Siswa</th>
                      <th>Nama siswa</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Diterima Dikelas</th>
                      <th>Tanggal Diterima Dikelas</th>
                      <th>Foto</th>
                      <th>Tools</th>
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
                        {{-- <form action="{{ url('siswa/delete/'.$t->NOMOR_INDUK) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Siswa"><i class="fa fa-trash"></i></button>
                        </form> --}}
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
                <!-- Modal -->
                @foreach ($siswa as $s)
                  <div class="modal-lg fade" id="detailsiswa_{{ $s->NOMOR_INDUK }}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <h4 style="font-style: bold">KETERANGAN TENTANG DIRI SISWA</h4>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-6">1. Nama Siswa Lengkap</div>
                              <div class="col-6">: {{ $s->NAMA_SISWA}}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">2. Nomor Induk/NISN</div>
                              <div class="col-6">: {{ $s->NOMOR_INDUK }}/{{ $s->NISN_SISWA }}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">3. Jenis Kelamin</div>
                              <div class="col-6">: {{ ($s) ? $s->JENIS_KELAMIN : '-'}}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">4. Tempat dan Tanggal Lahir</div>
                              <div class="col-6">: {{ $s->TEMPAT_TANGGAL_LAHIR }}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">5. Agama</div>
                              <div class="col-6">: {{ $s->AGAMA }}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">6. Anak ke</div>
                              <div class="col-6">: {{ $s->ANAK_KE }}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">7. Status Dalam Keluarga</div>
                              <div class="col-6">: {{ $s->STATUS_DALAM_KELUARGA }}</div>
                            </div>
                            <div class="row">
                              <div class="col-6">8. Alamat</div>
                              <div class="col-6">: {{ $s->ALAMAT }}</div>
                              <div class="col-6">Telepon Rumah</div>
                              <div class="col-6">: {{ $s->NAMA_SISWA }}</div>
                            </div>
                            {{-- <div class="col-6">9. Diterima Di Sekolah Ini</div>
                              <div class="col-6">: {{ $s->nama_siswa }}</div>
                          </div> --}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>                  
                @endforeach
@endsection