@section('title')
    Edit Rapor Tengah Semester
@endsection

@extends('index')

@section('konten')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h3>Edit Rapor Tengah Semester @foreach($rapor as $ra) {{ $ra->nama_matapelajaran }} @break @endforeach</h3>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">  
                                @foreach($rapor as $ra) 
                                    <form action="/menu_raportengah/update/{{ $ra->nomor_induk }}/{{ $ra->id_matapelajaran }}" class="form-horizontal form-label-left" method="post">
                                        {{ csrf_field() }}       
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Nama Siswa</label>
                                                    <input type="text" name="nama" readonly value="{{ $ra->nama_siswa }}" class="form-control">
                                                </div> 
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Nilai PTS</label>
                                                    <input type="number" name="pts" value="{{ $ra->NILAI_PTS }}" required class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="outline-style: auto;">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label>Kompetensi Dasar 1</label>
                                                    <select name="kd1" required class="form-control mb-12 mb-12">
                                                        <option value="">-- Pilih Kompetensi Dasar --</option>
                                                        @foreach($kd as $k)
                                                            @if($k->ID_MATAPELAJARAN == $id2)
                                                                <option value="{{ $k->ID_KD }}" @if($k->ID_KD === $rapor[0]->ID_KD) selected @endif>{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>                    
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Nilai Harian 1</label>
                                                    <input type="number" name="nilai1" value="{{ $ra->NILAI_HARIAN1 }}" required class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="outline-style: auto;">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label>Kompetensi Dasar 2</label>
                                                    <select name="kd2" class="form-control mb-3 mb-3">
                                                        <option value="">-- Pilih Kompetensi Dasar --</option>
                                                        @foreach($kd as $k)
                                                            @if($k->ID_MATAPELAJARAN == $id2)
                                                                <option value="{{ $k->ID_KD }}" @if($k->ID_KD === $rapor[1]->ID_KD) selected @endif>{{ $k->NAMA_KD }} - {{ $k->DETAIL_KD }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>                    
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Nilai Harian 2</label>
                                                    <input type="number" name="nilai2" value="{{ $ra->NILAI_HARIAN2 }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-12" style="text-align:right;">
                                                <a href="/menu_raportengah"><button class="btn btn-secondary" type="button">Back</button></a>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    @break
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection