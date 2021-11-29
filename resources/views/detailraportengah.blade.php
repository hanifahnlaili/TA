@section('title')
    Detail Rapor Tengah Semester
@endsection

@extends('index')

@section('konten')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>Detail Rapor Tengah Semester @foreach($detail as $det) {{ $det->nama_matapelajaran }} @break @endforeach</h3>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">   
                                @foreach($detail as $det)
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Siswa</label>
                                                <input type="text" class="form-control" value="{{ $det->nama_siswa}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nilai PTS</label>
                                                <input type="text" class="form-control" value="{{ $det->nilai_PTS }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @endforeach
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama KD</th>
                                            <th>Detail KD</th>
                                            <th>Nilai Harian</th>
                                            <th>Capaian</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detail as $de)
                                            
                                            <tr>
                                                <td>{{ $de->nama_kd }}</td>
                                                <td>{{ $de->detail_kd }}</td>
                                                @if(count($detail) == 2)
                                                    @if($loop->iteration % 2 != 0)
                                                    <td>{{ $de->nilai_harian1 }}</td>
                                                    @else
                                                    <td>{{ $de->nilai_harian2 }}</td>
                                                    @endif
                                                @else
                                                    <td>{{ $de->nilai_harian1 }}</td>
                                                @endif
                                                </td>
                                                <td>{{ $de->range_huruf }}</td>
                                                <td>{{ $de->keterangan }}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="2" colspan="2" style="text-align:center;">Nilai Rata - Rata</th>
                                            @if(count($detail) == 2)
                                                <th colspan="3">{{ floor( ($det->nilai_harian1 + $det->nilai_harian2) / 2) }}</th>
                                            @else
                                                <th colspan="3">{{ $det->nilai_harian1 }}</th>
                                            @endif
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection