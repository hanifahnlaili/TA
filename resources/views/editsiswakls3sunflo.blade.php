@section('title')
    <title>Edit Siswa Kelas 3 Sunflower</title>
@endsection

@extends('index')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Siswa Kelas 3 Sunflower</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    @foreach($siswa as $s)
                    <form action="{{url('/siswa/update')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor Induk <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nomor_induk" required="required" value="{{$s->nomor_induk}}" class="form-control " readonly>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Siswa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nama_siswa" required="required" value="{{$s->nama_siswa}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN Siswa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nisn_siswa" required="required" value="{{$s->nisn_siswa}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Pilih Kelas<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_kelas" required>
                                @foreach( $kelas as $k )    
                                    <option value="{{ $k -> id_kelas }}" selected>
                                        {{ $k -> nama_kelas }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Pilih Tahun Pelajaran<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_tapel" required>
                                    @foreach( $tahun_pelajaran as $d )
                                        <option value="{{ $d -> id_tapel }}">
                                            {{ $d -> tapel }}
                                            @if ( ( $d -> semester ) == 1 ) 
                                                Ganjil
                                            @else
                                                Genap
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                    @endforeach

            </div>
        </div>
    </div>
</div>
@endsection