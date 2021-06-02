@section('title')
    <title>Tambah Nilai Buku Penghubung Kelas 3 Sunflower</title>
@endsection

@extends('home')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Nilai Buku Penghubung Kelas 3 Sunflower</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    <form action="{{url('/bukuphb/store')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="id_nbp" class="form-control " hidden>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Siswa<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="nomor_induk" required>
                                @foreach( $siswa as $s )    
                                    <option value="{{ $s -> nomor_induk }}" selected>
                                        {{ $s -> nama_siswa }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Guru Spiritual<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="guru_spiritual" required="required" class="form-control " >
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Guru Sosial <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="guru_sosial" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Orang Tua Spiritual <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="ortu_spiritual" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Orang Tua Sosial <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="ortu_sosial" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Pilih Tahun Pelajaran<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_tapel" required>
                                @foreach( $tahun_pelajaran as $t )    
                                    <option value="{{ $t -> id_tapel }}" selected>
                                        {{ $t -> id_tapel }}
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