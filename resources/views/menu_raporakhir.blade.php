@section('title')
    Rapor Akhir Semester
@endsection

@extends('index')

@section('konten')
<div class="col-md-12 col-sm-12 ">

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Al-Qur'an Hadist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-aqidahakhlaq-tab" data-toggle="pill" href="#pills-aqidahakhlaq" role="tab" aria-controls="pills-aqidahakhlaq" aria-selected="false">Aqidah Akhlaq</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-kmd-tab" data-toggle="pill" href="#pills-kmd" role="tab" aria-controls="pills-kmd" aria-selected="false">KMD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-pkn-tab" data-toggle="pill" href="#pills-pkn" role="tab" aria-controls="pills-pkn" aria-selected="false">PKn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasaindonesia-tab" data-toggle="pill" href="#pills-bahasaindonesia" role="tab" aria-controls="pills-bahasaindonesia" aria-selected="false">Bahasa Indonesia</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-matematika-tab" data-toggle="pill" href="#pills-matematika" role="tab" aria-controls="pills-matematika" aria-selected="false">Matematika</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ipa-tab" data-toggle="pill" href="#pills-ipa" role="tab" aria-controls="pills-ipa" aria-selected="false">IPA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-ips-tab" data-toggle="pill" href="#pills-ips" role="tab" aria-controls="pills-ips" aria-selected="false">IPS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-senbudprakarya-tab" data-toggle="pill" href="#pills-senbudprakarya" role="tab" aria-controls="pills-senbudprakarya" aria-selected="false">Senbud Prakarya</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-penjasorkes-tab" data-toggle="pill" href="#pills-penjasorkes" role="tab" aria-controls="pills-penjasorkes" aria-selected="false">Penjasorkes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasajawa-tab" data-toggle="pill" href="#pills-bahasajawa" role="tab" aria-controls="pills-bahasajawa" aria-selected="false">Bahasa Jawa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasaarab-tab" data-toggle="pill" href="#pills-bahasaarab" role="tab" aria-controls="pills-bahasaarab" aria-selected="false">Bahasa Arab</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-bahasainggris-tab" data-toggle="pill" href="#pills-bahasainggris" role="tab" aria-controls="pills-bahasainggris" aria-selected="false">Bahasa Inggris</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-tik-tab" data-toggle="pill" href="#pills-tik" role="tab" aria-controls="pills-tik" aria-selected="false">TIK</a>
    </li>
  </ul>

  <div class="tab-content" id="pills-tabContent">

    <!-- Al-Qur'an Hadist -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputAlquran">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputAlquran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL001" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir as $r)
      <div class="modal fade bs-example-modal-lg in" id="editAlquran{{ $r->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir as $r)
      <div class="modal fade" id="detailAlquran{{ $r->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhira as $ra)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $ra->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($ra->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $ra->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $ra->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhira as $ra)
                      @if($ra->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($ra->nilai_harian1 + $ra->nilai_harian2 + $r->NILAI_HARIAN3 + $r->NILAI_HARIAN4 + $ra->nilai_pts + $r->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($ra->nilai_harian1 + $r->NILAI_HARIAN3 + $r->NILAI_HARIAN4 + $ra->nilai_pts + $r->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir as $a)
                        @if($a->id_ki == 'KI - 3')
                          @foreach ($raporakhira as $aa)
                            <?php 
                              $rata1 = floor( ($aa->nilai_harian1 + $aa->nilai_harian2 + $a->NILAI_HARIAN3 + $a->NILAI_HARIAN4 + $aa->nilai_pts + $a->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($aa->nilai_harian1 + $a->NILAI_HARIAN3 + $a->NILAI_HARIAN4 + $aa->nilai_pts + $a->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a->nama_siswa}}</td>
                            <td>{{$a->nilai_kbm}}</td>
                            @foreach ($raporakhira as $aa)
                              @if($aa->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editAlquran{{$a->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailAlquran{{$a->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputAlquran2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputAlquran2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL001" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Modal Edit-->
      @foreach ($raporakhir as $r)
      <div class="modal fade bs-example-modal-lg in" id="editAlquran2{{ $r->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir as $r)
      <div class="modal fade" id="detailAlquran2{{ $r->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r->NILAI_HARIAN3 + $r->NILAI_HARIAN4 + $r->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir as $a)
                        @if($a->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a->NILAI_HARIAN3 + $a->NILAI_HARIAN4 + $a->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a->nama_siswa}}</td>
                            <td>{{$a->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editAlquran2{{$a->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailAlquran2{{$a->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Aqidah Akhlaq -->
    <div class="tab-pane fade " id="pills-aqidahakhlaq" role="tabpanel" aria-labelledby="pills-aqidahakhlaq-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputAqidah">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputAqidah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL002" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir1 as $r1)
      <div class="modal fade bs-example-modal-lg in" id="editAqidah{{ $r1->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r1->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r1->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r1->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r1->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r1->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r1->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir1 as $r1)
      <div class="modal fade" id="detailAqidah{{ $r1->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r1->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir1a as $r1a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r1a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r1a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r1a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r1a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r1->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r1->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r1->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir1a as $r1a)
                      @if($r1a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r1a->nilai_harian1 + $r1a->nilai_harian2 + $r1->NILAI_HARIAN3 + $r1->NILAI_HARIAN4 + $r1a->nilai_pts + $r1->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r1a->nilai_harian1 + $r1->NILAI_HARIAN3 + $r1->NILAI_HARIAN4 + $r1a->nilai_pts + $r1->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r1->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir1 as $a1)
                        @if($a1->id_ki == 'KI - 3')
                          @foreach ($raporakhir1a as $a1a)
                            <?php 
                              $rata1 = floor( ($a1a->nilai_harian1 + $a1a->nilai_harian2 + $a1->NILAI_HARIAN3 + $a1->NILAI_HARIAN4 + $a1a->nilai_pts + $a1->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a1a->nilai_harian1 + $a1->NILAI_HARIAN3 + $a1->NILAI_HARIAN4 + $a1a->nilai_pts + $a1->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a1->nama_siswa}}</td>
                            <td>{{$a1->nilai_kbm}}</td>
                            @foreach ($raporakhir1a as $a1a)
                              @if($a1a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a1->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editAqidah{{$a1->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailAqidah{{$a1->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputAqidah2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputAqidah2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL002" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir1 as $r1)
      <div class="modal fade bs-example-modal-lg in" id="editAqidah2{{ $r1->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r1->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r1->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r1->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r1->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r1->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r1->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir1 as $r1)
      <div class="modal fade" id="detailAqidah2{{ $r1->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r1->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r1->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r1->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r1->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r1->NILAI_HARIAN3 + $r1->NILAI_HARIAN4 + $r1->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r1->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir1 as $a1)
                        @if($a1->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a1->NILAI_HARIAN3 + $a1->NILAI_HARIAN4 + $a1->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a1->nama_siswa}}</td>
                            <td>{{$a1->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a1->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editAqidah2{{$a1->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailAqidah2{{$a1->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- KMD -->
    <div class="tab-pane fade " id="pills-kmd" role="tabpanel" aria-labelledby="pills-kmd-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputKmd">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputKmd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL005" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir4 as $r4)
      <div class="modal fade bs-example-modal-lg in" id="editKmd{{ $r4->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r4->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r4->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r4->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r4->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r4->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r4->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir4 as $r4)
      <div class="modal fade" id="detailKmd{{ $r4->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r4->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir4a as $r4a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r4a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r4a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r4a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r4a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r4->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r4->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r4->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir4a as $r4a)
                      @if($r4a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r4a->nilai_harian1 + $r4a->nilai_harian2 + $r4->NILAI_HARIAN3 + $r4->NILAI_HARIAN4 + $r4a->nilai_pts + $r4->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r4a->nilai_harian1 + $r4->NILAI_HARIAN3 + $r4->NILAI_HARIAN4 + $r4a->nilai_pts + $r4->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r4->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir4 as $a4)
                        @if($a4->id_ki == 'KI - 3')
                          @foreach($raporakhir4a as $a4a)
                            <?php 
                              $rata1 = floor( ($a4a->nilai_harian1 + $a4a->nilai_harian2 + $a4->NILAI_HARIAN3 + $a4->NILAI_HARIAN4 + $a4a->nilai_pts + $a4->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a4a->nilai_harian1 + $a4->NILAI_HARIAN3 + $a4->NILAI_HARIAN4 + $a4a->nilai_pts + $a4->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a4->nama_siswa}}</td>
                            <td>{{$a4->nilai_kbm}}</td>
                            @foreach($raporakhir4a as $a4a)
                              @if($a4a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a4->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editKmd{{$a4->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailKmd{{$a4->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputKmd2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputKmd2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL005" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir4 as $r4)
      <div class="modal fade bs-example-modal-lg in" id="editKmd2{{ $r4->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r4->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r4->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r4->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r4->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r4->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r4->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir4 as $r4)
      <div class="modal fade" id="detailKmd2{{ $r4->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r4->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r4->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r4->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r4->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r4->NILAI_HARIAN3 + $r4->NILAI_HARIAN4 + $r4->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r4->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir4 as $a4)
                        @if($a4->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a4->NILAI_HARIAN3 + $a4->NILAI_HARIAN4 + $a4->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a4->nama_siswa}}</td>
                            <td>{{$a4->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a4->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editKmd2{{$a4->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailKmd2{{$a4->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- PKn -->
    <div class="tab-pane fade " id="pills-pkn" role="tabpanel" aria-labelledby="pills-pkn-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPkn">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputPkn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL006" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir5 as $r5)
      <div class="modal fade bs-example-modal-lg in" id="editPkn{{ $r5->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r5->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r5->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r5->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r5->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r5->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r5->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir5 as $r5)
      <div class="modal fade" id="detailPkn{{ $r5->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r5->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach($raporakhir5a as $r5a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r5a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r5a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r5a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r5a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r5->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r5->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r5->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach($raporakhir5a as $r5a)
                      @if($r5a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r5a->nilai_harian1 + $r5a->nilai_harian2 + $r5->NILAI_HARIAN3 + $r5->NILAI_HARIAN4 + $r5a->nilai_pts + $r5->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r5a->nilai_harian1 + $r5->NILAI_HARIAN3 + $r5->NILAI_HARIAN4 + $r5a->nilai_pts + $r5->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r5->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir5 as $a5)
                        @if($a5->id_ki == 'KI - 3')
                          <?php 
                            $rata1 = floor( ($a5->nilai_harian1 + $a5->nilai_harian2 + $a5->NILAI_HARIAN3 + $a5->NILAI_HARIAN4 + $a5->nilai_pts + $a5->NILAI_PAS ) / 6); 
                            $rata2 = floor( ($a5->nilai_harian1 + $a5->NILAI_HARIAN3 + $a5->NILAI_HARIAN4 + $a5->nilai_pts + $a5->NILAI_PAS ) / 5);
                          ?>
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a5->nama_siswa}}</td>
                            <td>{{$a5->nilai_kbm}}</td>
                            @if($a5->nilai_harian2 != null)
                              <td>{{ $rata1 }}</td>
                              @if($rata1 >= 93 && $rata1 <= 100)
                                <td>A</td>
                              @elseif($rata1 >= 84 && $rata1 <= 92)
                                <td>B</td>
                              @elseif($rata1 >= 75 && $rata1 <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            @else
                              <td>{{ $rata2 }}</td>
                              @if($rata2 >= 93 && $rata2 <= 100)
                                <td>A</td>
                              @elseif($rata2 >= 84 && $rata2 <= 92)
                                <td>B</td>
                              @elseif($rata2 >= 75 && $rata2 <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            @endif
                            <td>{{$a5->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editPkn{{$a5->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailPkn{{$a5->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPkn2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputPkn2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL006" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir5 as $r5)
      <div class="modal fade bs-example-modal-lg in" id="editPkn2{{ $r5->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r5->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r5->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r5->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r5->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r5->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r5->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir5 as $r5)
      <div class="modal fade" id="detailPkn2{{ $r5->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r5->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r5->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r5->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r5->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r5->NILAI_HARIAN3 + $r5->NILAI_HARIAN4 + $r5->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r5->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir5 as $a5)
                        @if($a5->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a5->NILAI_HARIAN3 + $a5->NILAI_HARIAN4 + $a5->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a5->nama_siswa}}</td>
                            <td>{{$a5->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a5->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editPkn2{{$a5->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailPkn2{{$a5->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Bahasa Indonesia -->
    <div class="tab-pane fade " id="pills-bahasaindonesia" role="tabpanel" aria-labelledby="pills-bahasaindonesia-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputInd">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputInd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL007" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir6 as $r6)
      <div class="modal fade bs-example-modal-lg in" id="editInd{{ $r6->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r6->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r6->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r6->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r6->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r6->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r6->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir6 as $r6)
      <div class="modal fade" id="detailInd{{ $r6->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r6->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach($raporakhir6a as $r6a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r6a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r6a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r6a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r6a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r6->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r6->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r6->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach($raporakhir6a as $r6a)
                      @if($r6a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r6a->nilai_harian1 + $r6a->nilai_harian2 + $r6->NILAI_HARIAN3 + $r6->NILAI_HARIAN4 + $r6a->nilai_pts + $r6->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r6a->nilai_harian1 + $r6->NILAI_HARIAN3 + $r6->NILAI_HARIAN4 + $r6a->nilai_pts + $r6->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r6->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir6 as $a6)
                        @if($a6->id_ki == 'KI - 3')
                          @foreach($raporakhir6a as $a6a)
                            <?php 
                              $rata1 = floor( ($a6a->nilai_harian1 + $a6a->nilai_harian2 + $a6->NILAI_HARIAN3 + $a6->NILAI_HARIAN4 + $a6a->nilai_pts + $a6->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a6a->nilai_harian1 + $a6->NILAI_HARIAN3 + $a6->NILAI_HARIAN4 + $a6a->nilai_pts + $a6->NILAI_PAS ) / 5);
                            ?>
                          @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a6->nama_siswa}}</td>
                            <td>{{$a6->nilai_kbm}}</td>
                            @foreach($raporakhir6a as $a6a)
                              @if($a6a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a6->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editInd{{$a6->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailInd{{$a6->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputInd2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputInd2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL007" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir6 as $r6)
      <div class="modal fade bs-example-modal-lg in" id="editInd2{{ $r6->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r6->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r6->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r6->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r6->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r6->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r6->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir6 as $r6)
      <div class="modal fade" id="detailInd2{{ $r6->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r6->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r6->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r6->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r6->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r6->NILAI_HARIAN3 + $r6->NILAI_HARIAN4 + $r6->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r6->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir6 as $a6)
                        @if($a6->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a6->NILAI_HARIAN3 + $a6->NILAI_HARIAN4 + $a6->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a6->nama_siswa}}</td>
                            <td>{{$a6->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a6->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editInd2{{$a6->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailInd2{{$a6->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Matematika -->
    <div class="tab-pane fade " id="pills-matematika" role="tabpanel" aria-labelledby="pills-matematika-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputMtk">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputMtk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL008" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir7 as $r7)
      <div class="modal fade bs-example-modal-lg in" id="editMtk{{ $r7->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r7->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r7->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r7->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r7->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r7->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r7->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir7 as $r7)
      <div class="modal fade" id="detailMtk{{ $r7->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r7->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir7a as $r7a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r7a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r7a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r7a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r7a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r7->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r7->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r7->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir7a as $r7a)
                      @if($r7a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r7a->nilai_harian1 + $r7a->nilai_harian2 + $r7->NILAI_HARIAN3 + $r7->NILAI_HARIAN4 + $r7a->nilai_pts + $r7->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r7a->nilai_harian1 + $r7->NILAI_HARIAN3 + $r7->NILAI_HARIAN4 + $r7a->nilai_pts + $r7->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r7->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir7 as $a7)
                        @if($a7->id_ki == 'KI - 3')
                          @foreach($raporakhir7a as $a7a)
                            <?php 
                              $rata1 = floor( ($a7a->nilai_harian1 + $a7a->nilai_harian2 + $a7->NILAI_HARIAN3 + $a7->NILAI_HARIAN4 + $a7a->nilai_pts + $a7->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a7a->nilai_harian1 + $a7->NILAI_HARIAN3 + $a7->NILAI_HARIAN4 + $a7a->nilai_pts + $a7->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a7->nama_siswa}}</td>
                            <td>{{$a7->nilai_kbm}}</td>
                            @foreach($raporakhir7a as $a7a)
                              @if($a7a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a7->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editMtk{{$a7->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailMtk{{$a7->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputMtk2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputMtk2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL008" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir7 as $r7)
      <div class="modal fade bs-example-modal-lg in" id="editMtk2{{ $r7->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r7->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r7->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r7->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r7->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r7->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r7->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir7 as $r7)
      <div class="modal fade" id="detailMtk2{{ $r7->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r7->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r7->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r7->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r7->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r7->NILAI_HARIAN3 + $r7->NILAI_HARIAN4 + $r7->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r7->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir7 as $a7)
                        @if($a7->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a7->NILAI_HARIAN3 + $a7->NILAI_HARIAN4 + $a7->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a7->nama_siswa}}</td>
                            <td>{{$a7->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a7->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editMtk2{{$a7->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailMtk2{{$a7->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- IPA -->
    <div class="tab-pane fade " id="pills-ipa" role="tabpanel" aria-labelledby="pills-ipa-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIpa">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL009" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir8 as $r8)
      <div class="modal fade bs-example-modal-lg in" id="editIpa{{ $r8->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r8->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r8->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r8->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r8->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r8->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r8->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir8 as $r8)
      <div class="modal fade" id="detailIpa{{ $r8->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r8->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir8a as $r8a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r8a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r8a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r8a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r8a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r8->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r8->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r8->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir8a as $r8a)
                      @if($r8a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r8a->nilai_harian1 + $r8a->nilai_harian2 + $r8->NILAI_HARIAN3 + $r8->NILAI_HARIAN4 + $r8a->nilai_pts + $r8->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r8a->nilai_harian1 + $r8->NILAI_HARIAN3 + $r8->NILAI_HARIAN4 + $r8a->nilai_pts + $r8->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r8->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir8 as $a8)
                        @if($a8->id_ki == 'KI - 3')
                          @foreach($raporakhir8a as $a8a)
                            <?php 
                              $rata1 = floor( ($a8a->nilai_harian1 + $a8a->nilai_harian2 + $a8->NILAI_HARIAN3 + $a8->NILAI_HARIAN4 + $a8a->nilai_pts + $a8->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a8a->nilai_harian1 + $a8->NILAI_HARIAN3 + $a8->NILAI_HARIAN4 + $a8a->nilai_pts + $a8->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a8->nama_siswa}}</td>
                            <td>{{$a8->nilai_kbm}}</td>
                            @foreach($raporakhir8a as $a8a)
                              @if($a8a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a8->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editIpa{{$a8->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailIpa{{$a8->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIpa2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIpa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL009" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir8 as $r8)
      <div class="modal fade bs-example-modal-lg in" id="editIpa2{{ $r8->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r8->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r8->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r8->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r8->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r8->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r8->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir8 as $r8)
      <div class="modal fade" id="detailIpa2{{ $r8->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r8->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r8->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r8->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r8->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r8->NILAI_HARIAN3 + $r8->NILAI_HARIAN4 + $r8->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r8->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir8 as $a8)
                        @if($a8->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a8->NILAI_HARIAN3 + $a8->NILAI_HARIAN4 + $a8->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a8->nama_siswa}}</td>
                            <td>{{$a8->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a8->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editIpa2{{$a8->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailIpa2{{$a8->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- IPS -->
    <div class="tab-pane fade " id="pills-ips" role="tabpanel" aria-labelledby="pills-ips-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIps">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIps" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL010" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir9 as $r9)
      <div class="modal fade bs-example-modal-lg in" id="editIps{{ $r9->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r9->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r9->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r9->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r9->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r9->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r9->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir9 as $r9)
      <div class="modal fade" id="detailIps{{ $r9->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r9->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir9a as $r9a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r9a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r9a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r9a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r9a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r9->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r9->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r9->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir9a as $r9a)
                      @if($r9a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r9a->nilai_harian1 + $r9a->nilai_harian2 + $r9->NILAI_HARIAN3 + $r9->NILAI_HARIAN4 + $r9a->nilai_pts + $r9->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r9a->nilai_harian1 + $r9->NILAI_HARIAN3 + $r9->NILAI_HARIAN4 + $r9a->nilai_pts + $r9->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r9->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir9 as $a9)
                        @if($a9->id_ki == 'KI - 3')
                          @foreach($raporakhir9a as $a9a)
                            <?php 
                              $rata1 = floor( ($a9a->nilai_harian1 + $a9a->nilai_harian2 + $a9->NILAI_HARIAN3 + $a9->NILAI_HARIAN4 + $a9a->nilai_pts + $a9->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a9a->nilai_harian1 + $a9->NILAI_HARIAN3 + $a9->NILAI_HARIAN4 + $a9a->nilai_pts + $a9->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a9->nama_siswa}}</td>
                            <td>{{$a9->nilai_kbm}}</td>
                            @foreach($raporakhir9a as $a9a)
                              @if($a9a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a9->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editIps{{$a9->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailIps{{$a9->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIps2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIps2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL010" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir9 as $r9)
      <div class="modal fade bs-example-modal-lg in" id="editIps2{{ $r9->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r9->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r9->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r9->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r9->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r9->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r9->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir9 as $r9)
      <div class="modal fade" id="detailIps2{{ $r9->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r9->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r9->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r9->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r9->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r9->NILAI_HARIAN3 + $r9->NILAI_HARIAN4 + $r9->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r9->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir9 as $a9)
                        @if($a9->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a9->NILAI_HARIAN3 + $a9->NILAI_HARIAN4 + $a9->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a9->nama_siswa}}</td>
                            <td>{{$a9->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a9->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editIps2{{$a9->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailIps2{{$a9->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Senbud Prakarya -->
    <div class="tab-pane fade " id="pills-senbudprakarya" role="tabpanel" aria-labelledby="pills-senbudprakarya-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputSenbud">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputSenbud" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL011" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir10 as $r10)
      <div class="modal fade bs-example-modal-lg in" id="editSenbud{{ $r10->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r10->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r10->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r10->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r10->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r10->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r10->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir10 as $r10)
      <div class="modal fade" id="detailSenbud{{ $r10->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r10->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir10a as $r10a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r10a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r10a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r10a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r10a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r10->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r10->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r10->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir10a as $r10a)
                      @if($r10a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r10a->nilai_harian1 + $r10a->nilai_harian2 + $r10->NILAI_HARIAN3 + $r10->NILAI_HARIAN4 + $r10a->nilai_pts + $r10->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r10a->nilai_harian1 + $r10->NILAI_HARIAN3 + $r10->NILAI_HARIAN4 + $r10a->nilai_pts + $r10->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r10->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir10 as $a10)
                        @if($a10->id_ki == 'KI - 3')
                          @foreach($raporakhir10a as $a10a)
                            <?php 
                              $rata1 = floor( ($a10a->nilai_harian1 + $a10a->nilai_harian2 + $a10->NILAI_HARIAN3 + $a10->NILAI_HARIAN4 + $a10a->nilai_pts + $a10->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a10a->nilai_harian1 + $a10->NILAI_HARIAN3 + $a10->NILAI_HARIAN4 + $a10a->nilai_pts + $a10->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a10->nama_siswa}}</td>
                            <td>{{$a10->nilai_kbm}}</td>
                            @foreach ($raporakhir10a as $a10a)
                              @if($a10a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a10->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editSenbud{{$a10->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailSenbud{{$a10->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputSenbud2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputSenbud2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL011" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir10 as $r10)
      <div class="modal fade bs-example-modal-lg in" id="editSenbud2{{ $r10->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r10->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r10->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r10->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r10->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r10->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r10->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir10 as $r10)
      <div class="modal fade" id="detailSenbud2{{ $r10->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r10->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r10->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r10->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r10->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r10->NILAI_HARIAN3 + $r10->NILAI_HARIAN4 + $r10->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r10->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir10 as $a10)
                        @if($a10->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a10->NILAI_HARIAN3 + $a10->NILAI_HARIAN4 + $a10->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a10->nama_siswa}}</td>
                            <td>{{$a10->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a10->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editSenbud2{{$a10->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailSenbud2{{$a10->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Penjasorkes -->
    <div class="tab-pane fade " id="pills-penjasorkes" role="tabpanel" aria-labelledby="pills-penjasorkes-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPenjas">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputPenjas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL012" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir11 as $r11)
      <div class="modal fade bs-example-modal-lg in" id="editPenjas{{ $r11->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r11->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r11->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r11->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r11->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r11->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r11->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir11 as $r11)
      <div class="modal fade" id="detailPenjas{{ $r11->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r11->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir11a as $r11a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r11a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r11a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r11a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r11a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r11->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r11->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r11->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir11a as $r11a)
                      @if($r11a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r11a->nilai_harian1 + $r11a->nilai_harian2 + $r11->NILAI_HARIAN3 + $r11->NILAI_HARIAN4 + $r11a->nilai_pts + $r11->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r11a->nilai_harian1 + $r11->NILAI_HARIAN3 + $r11->NILAI_HARIAN4 + $r11a->nilai_pts + $r11->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r11->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir11 as $a11)
                        @if($a11->id_ki == 'KI - 3')
                          @foreach($raporakhir11a as $a11a)
                            <?php 
                              $rata1 = floor( ($a11a->nilai_harian1 + $a11a->nilai_harian2 + $a11->NILAI_HARIAN3 + $a11->NILAI_HARIAN4 + $a11a->nilai_pts + $a11->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a11a->nilai_harian1 + $a11->NILAI_HARIAN3 + $a11->NILAI_HARIAN4 + $a11a->nilai_pts + $a11->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a11->nama_siswa}}</td>
                            <td>{{$a11->nilai_kbm}}</td>
                            @foreach($raporakhir11a as $a11a)
                              @if($a11a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a11->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editPenjas{{$a11->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailPenjas{{$a11->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputPenjas2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputPenjas2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL012" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir11 as $r11)
      <div class="modal fade bs-example-modal-lg in" id="editPenjas2{{ $r11->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r11->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r11->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r11->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r11->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r11->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r11->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir11 as $r11)
      <div class="modal fade" id="detailPenjas2{{ $r11->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r11->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r11->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r11->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r11->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r11->NILAI_HARIAN3 + $r11->NILAI_HARIAN4 + $r11->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r11->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir11 as $a11)
                        @if($a11->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a11->NILAI_HARIAN3 + $a11->NILAI_HARIAN4 + $a11->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a11->nama_siswa}}</td>
                            <td>{{$a11->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a11->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editPenjas2{{$a11->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailPenjas2{{$a11->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Bahasa Jawa -->
    <div class="tab-pane fade " id="pills-bahasajawa" role="tabpanel" aria-labelledby="pills-bahasajawa-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputJawa">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputJawa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL013" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir12 as $r12)
      <div class="modal fade bs-example-modal-lg in" id="editJawa{{ $r12->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r12->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r12->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r12->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r12->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r12->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r12->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir12 as $r12)
      <div class="modal fade" id="detailJawa{{ $r12->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r12->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir12a as $r12a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r12a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r12a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r12a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r12a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r12->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r12->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r12->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir12a as $r12a)
                      @if($r12a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r12a->nilai_harian1 + $r12a->nilai_harian2 + $r12->NILAI_HARIAN3 + $r12->NILAI_HARIAN4 + $r12a->nilai_pts + $r12->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r12a->nilai_harian1 + $r12->NILAI_HARIAN3 + $r12->NILAI_HARIAN4 + $r12a->nilai_pts + $r12->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r12->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir12 as $a12)
                        @if($a12->id_ki == 'KI - 3')
                          @foreach($raporakhir12a as $a12a)
                            <?php 
                              $rata1 = floor( ($a12a->nilai_harian1 + $a12a->nilai_harian2 + $a12->NILAI_HARIAN3 + $a12->NILAI_HARIAN4 + $a12a->nilai_pts + $a12->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a12a->nilai_harian1 + $a12->NILAI_HARIAN3 + $a12->NILAI_HARIAN4 + $a12a->nilai_pts + $a12->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a12->nama_siswa}}</td>
                            <td>{{$a12->nilai_kbm}}</td>
                            @foreach($raporakhir12a as $a12a)
                              @if($a12a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a12->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editJawa{{$a12->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailJawa{{$a12->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputJawa2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputJawa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL013" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir12 as $r12)
      <div class="modal fade bs-example-modal-lg in" id="editJawa2{{ $r12->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r12->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r12->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r12->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r12->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r12->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r12->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir12 as $r12)
      <div class="modal fade" id="detailJawa2{{ $r12->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r12->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r12->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r12->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r12->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r12->NILAI_HARIAN3 + $r12->NILAI_HARIAN4 + $r12->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r12->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir12 as $a12)
                        @if($a12->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a12->NILAI_HARIAN3 + $a12->NILAI_HARIAN4 + $a12->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a12->nama_siswa}}</td>
                            <td>{{$a12->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a12->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editJawa2{{$a12->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailJawa2{{$a12->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Bahasa Arab -->
    <div class="tab-pane fade " id="pills-bahasaarab" role="tabpanel" aria-labelledby="pills-bahasaarab-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputArab">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputArab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL014" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir13 as $r13)
      <div class="modal fade bs-example-modal-lg in" id="editArab{{ $r13->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r13->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r13->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r13->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r13->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r13->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r13->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir13 as $r13)
      <div class="modal fade" id="detailArab{{ $r13->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r13->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir13a as $r13a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r13a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r13a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r13a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r13a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r13->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r13->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r13->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir13a as $r13a)
                      @if($r13a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r13a->nilai_harian1 + $r13a->nilai_harian2 + $r13->NILAI_HARIAN3 + $r13->NILAI_HARIAN4 + $r13a->nilai_pts + $r13->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r13a->nilai_harian1 + $r13->NILAI_HARIAN3 + $r13->NILAI_HARIAN4 + $r13a->nilai_pts + $r13->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r13->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir13 as $a13)
                        @if($a13->id_ki == 'KI - 3')
                          @foreach($raporakhir13a as $a13a)
                            <?php 
                              $rata1 = floor( ($a13a->nilai_harian1 + $a13a->nilai_harian2 + $a13->NILAI_HARIAN3 + $a13->NILAI_HARIAN4 + $a13a->nilai_pts + $a13->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a13a->nilai_harian1 + $a13->NILAI_HARIAN3 + $a13->NILAI_HARIAN4 + $a13a->nilai_pts + $a13->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a13->nama_siswa}}</td>
                            <td>{{$a13->nilai_kbm}}</td>
                            @foreach($raporakhir13a as $a13a)
                              @if($a13a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a13->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editArab{{$a13->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailArab{{$a13->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputArab2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputArab2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL014" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir13 as $r13)
      <div class="modal fade bs-example-modal-lg in" id="editArab2{{ $r13->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r13->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r13->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r13->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r13->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r13->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r13->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir13 as $r13)
      <div class="modal fade" id="detailArab2{{ $r13->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r13->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r13->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r13->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r13->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r13->NILAI_HARIAN3 + $r13->NILAI_HARIAN4 + $r13->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r13->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir13 as $a13)
                        @if($a13->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a13->NILAI_HARIAN3 + $a13->NILAI_HARIAN4 + $a13->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a13->nama_siswa}}</td>
                            <td>{{$a13->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a13->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="ediztArab2{{$a13->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailArab2{{$a13->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- Bahasa Inggris -->
    <div class="tab-pane fade " id="pills-bahasainggris" role="tabpanel" aria-labelledby="pills-bahasainggris-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIng">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIng" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL015" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir14 as $r14)
      <div class="modal fade bs-example-modal-lg in" id="editIng{{ $r14->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r14->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r14->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r14->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r14->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r14->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r14->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir14 as $r14)
      <div class="modal fade" id="detailIng{{ $r14->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r14->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir14a as $r14a)
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai Harian 1</label>
                      <input type="text" class="form-control" value="{{ $r14a->nilai_harian1 }}" readonly>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai Harian 2</label>
                      @if($r14a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ $r14a->nilai_harian2 }}" readonly>
                      @else
                        <input type="text" class="form-control" value="-" readonly>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PTS</label>
                      <input type="text" class="form-control" value="{{ $r14a->nilai_pts }}" readonly>
                    </div>
                  </div>
                </div>
                @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r14->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r14->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r14->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir14a as $r14a)
                      @if($r14a->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r14a->nilai_harian1 + $r14a->nilai_harian2 + $r14->NILAI_HARIAN3 + $r14->NILAI_HARIAN4 + $r14a->nilai_pts + $r14->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r14a->nilai_harian1 + $r14->NILAI_HARIAN3 + $r14->NILAI_HARIAN4 + $r14a->nilai_pts + $r14->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r14->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir14 as $a14)
                        @if($a14->id_ki == 'KI - 3')
                          @foreach($raporakhir14a as $a14a)
                            <?php 
                              $rata1 = floor( ($a14a->nilai_harian1 + $a14a->nilai_harian2 + $a14->NILAI_HARIAN3 + $a14->NILAI_HARIAN4 + $a14a->nilai_pts + $a14->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a14a->nilai_harian1 + $a14->NILAI_HARIAN3 + $a14->NILAI_HARIAN4 + $a14a->nilai_pts + $a14->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a14->nama_siswa}}</td>
                            <td>{{$a14->nilai_kbm}}</td>
                            @foreach($raporakhir14a as $a14a)
                              @if($a14a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a14->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editIng{{$a14->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailIng{{$a14->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputIng2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputIng2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL015" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir14 as $r14)
      <div class="modal fade bs-example-modal-lg in" id="editIng2{{ $r14->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r14->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r14->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r14->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r14->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r14->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r14->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir14 as $r14)
      <div class="modal fade" id="detailIng2{{ $r14->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r14->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r14->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r14->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r14->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r14->NILAI_HARIAN3 + $r14->NILAI_HARIAN4 + $r14->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r14->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir14 as $a14)
                        @if($a14->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a14->NILAI_HARIAN3 + $a14->NILAI_HARIAN4 + $a14->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a14->nama_siswa}}</td>
                            <td>{{$a14->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a14->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editIng2{{$a14->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailIng2{{$a14->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!-- TIK -->
    <div class="tab-pane fade " id="pills-tik" role="tabpanel" aria-labelledby="pills-tik-tab">

      <!-- KI-3 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-3
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputTik">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputTik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki3/MPL016" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir15 as $r15)
      <div class="modal fade bs-example-modal-lg in" id="editTik{{ $r15->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-3</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki3/{{ $r15->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r15->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r15->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r15->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r15->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r15->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir15 as $r15)
      <div class="modal fade" id="detailTik{{ $r15->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-3</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r15->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              @foreach ($raporakhir15a as $r15a)
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 1</label>
                    <input type="text" class="form-control" value="{{ $r15a->nilai_harian1 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 2</label>
                    @if($r15a->nilai_harian2 != null)
                      <input type="text" class="form-control" value="{{ $r15a->nilai_harian2 }}" readonly>
                    @else
                      <input type="text" class="form-control" value="-" readonly>
                    @endif
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PTS</label>
                    <input type="text" class="form-control" value="{{ $r15a->nilai_pts }}" readonly>
                  </div>
                </div>
              </div>
              @break
              @endforeach
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r15->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r15->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r15->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    @foreach ($raporakhir15a as $r15a)
                      @if($r15->nilai_harian2 != null)
                        <input type="text" class="form-control" value="{{ floor( ($r15a->nilai_harian1 + $r15a->nilai_harian2 + $r15->NILAI_HARIAN3 + $r15->NILAI_HARIAN4 + $r15a->nilai_pts + $r15->NILAI_PAS ) / 6) }}" readonly>
                      @else
                        <input type="text" class="form-control" value="{{ floor( ($r15a->nilai_harian1 + $r15->NILAI_HARIAN3 + $r15->NILAI_HARIAN4 + $r15a->nilai_pts + $r15->NILAI_PAS ) / 5) }} " readonly>
                      @endif
                      @break
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r15->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-3</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                                                        
                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nu=1; ?>
                      @foreach($raporakhir15 as $a15)
                        @if($a15->id_ki == 'KI - 3')
                          @foreach($raporakhir15a as $a15a)
                            <?php 
                              $rata1 = floor( ($a15a->nilai_harian1 + $a15a->nilai_harian2 + $a15->NILAI_HARIAN3 + $a15->NILAI_HARIAN4 + $a15a->nilai_pts + $a15->NILAI_PAS ) / 6); 
                              $rata2 = floor( ($a15a->nilai_harian1 + $a15->NILAI_HARIAN3 + $a15->NILAI_HARIAN4 + $a15a->nilai_pts + $a15->NILAI_PAS ) / 5);
                            ?>
                            @break
                          @endforeach
                          <tr>
                            <td>{{$nu++}}</td>
                            <td>{{$a15->nama_siswa}}</td>
                            <td>{{$a15->nilai_kbm}}</td>
                            @foreach($raporakhir15a as $a15a)
                              @if($a15a->nilai_harian2 != null)
                                <td>{{ $rata1 }}</td>
                                @if($rata1 >= 93 && $rata1 <= 100)
                                  <td>A</td>
                                @elseif($rata1 >= 84 && $rata1 <= 92)
                                  <td>B</td>
                                @elseif($rata1 >= 75 && $rata1 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @else
                                <td>{{ $rata2 }}</td>
                                @if($rata2 >= 93 && $rata2 <= 100)
                                  <td>A</td>
                                @elseif($rata2 >= 84 && $rata2 <= 92)
                                  <td>B</td>
                                @elseif($rata2 >= 75 && $rata2 <=83)
                                  <td>C</td>
                                @else
                                  <td>C</td>
                                @endif
                              @endif
                              @break
                            @endforeach
                            <td>{{$a15->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editTik{{$a15->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailTik{{$a15->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
      </div>

      <br><br><br>

      <!-- KI-4 -->
      <div class="x_panel">
        <h3>Tambah Data Rapor Akhir Semester KI-4
          <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputTik2">
            <i class="fas fa-plus-circle"></i> Add
          </button>
          </ul>
        </h3>
      </div>

      <!-- Modal Insert-->
      <div class="modal fade bs-example-modal-lg in" id="inputTik2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Tambah Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/insert/ki4/MPL016" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <select name="nama" required class="form-control mb-3 mb-3">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                          <option value="{{ $s->NOMOR_INDUK }}">{{ $s->NAMA_SISWA }}</option>
                        @endforeach
                      </select>
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Edit-->
      @foreach ($raporakhir15 as $r15)
      <div class="modal fade bs-example-modal-lg in" id="editTik2{{ $r15->ID_KOMPONEN }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel2">Edit Nilai Rapor Akhir Semester KI-4</h4>
              <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/menu_raporakhir/edit/ki4/{{ $r15->ID_KOMPONEN }}" class="form-horizontal form-label-left" method="post">
              {{ csrf_field() }}
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $r15->nama_siswa }}" readonly required class="form-control">
                    </div> 
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nilai PAS</label>
                      <input type="number" name="pas" value="{{ $r15->NILAI_PAS }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 3</label>
                      <input type="number" name="nilai3" value="{{ $r15->NILAI_HARIAN3 }}" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nilai Harian 4</label>
                      <input type="number" name="nilai4" value="{{ $r15->NILAI_HARIAN4 }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" name="ket" value="{{ $r15->DESKRIPSI }}" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach

      <!-- /.modal Detail-->
      @foreach ($raporakhir15 as $r15)
      <div class="modal fade" id="detailTik2{{ $r15->ID_KOMPONEN }}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Rapot Akhir Semester KI-4</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" value="{{ $r15->nama_siswa}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 3</label>
                    <input type="text" class="form-control" value="{{ $r15->NILAI_HARIAN3 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai Harian 4</label>
                    <input type="text" class="form-control" value="{{ $r15->NILAI_HARIAN4 }}" readonly>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Nilai PAS</label>
                    <input type="text" class="form-control" value="{{ $r15->NILAI_PAS }}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nilai Rata - Rata</label>
                    <input type="text" class="form-control" value="{{ floor( ($r15->NILAI_HARIAN3 + $r15->NILAI_HARIAN4 + $r15->NILAI_PAS) / 3) }}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" value="{{ $r15->DESKRIPSI }}" readonly>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>
      @endforeach
      <!-- /.modal -->

      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel Rapor Akhir Semester KI-4</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">  

                    <table id="datatable" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align:center">
                          <th>Nomor</th>
                          <th>Nama Siswa</th>
                          <th>KBM</th>
                          <th>Nilai</th>
                          <th>Predikat</th>
                          <th>Deskripsi</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                      @foreach($raporakhir15 as $a15)
                        @if($a15->id_ki == 'KI - 4')
                          <?php $rata = floor( ($a15->NILAI_HARIAN3 + $a15->NILAI_HARIAN4 + $a15->NILAI_PAS) / 3); ?>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$a15->nama_siswa}}</td>
                            <td>{{$a15->nilai_kbm}}</td>
                            <td>{{ $rata }}</td>
                            @if($rata >= 93 && $rata <= 100)
                                <td>A</td>
                              @elseif($rata >= 84 && $rata <= 92)
                                <td>B</td>
                              @elseif($rata >= 75 && $rata <=83)
                                <td>C</td>
                              @else
                                <td>C</td>
                              @endif
                            <td>{{$a15->DESKRIPSI}}</td>
                            <td>
                              <a role="button" class="btn btn-secondary" data-toggle="modal" data-placement="top" title="Edit Siswa" href="#editTik2{{$a15->ID_KOMPONEN}}"><i class="fa fa-edit"></i></a>
                              <a role="button" class="btn btn-info" data-toggle="modal" data-placement="top" title="Detail Siswa" href="#detailTik2{{$a15->ID_KOMPONEN}}"><i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                        @endif
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