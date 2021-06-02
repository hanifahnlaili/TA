@section('title')
    <title>Input Siswa Baru</title>
    <link rel="icon" href="asset_2_s1o_icon.ico" type="image/ico" />
@endsection

@extends('home')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Input Siswa Baru</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="{{url('/siswa/store')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor Induk <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="integer" name="nomor_induk" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Siswa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nama_siswa" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN Siswa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="nisn_siswa" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Pilih Kelas<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_kelas" required>
                                    @foreach( $kelas as $k )
                                        <option value="{{ $k -> id_kelas }}">
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
            </div>
        </div>
    </div>
</div>
@endsection