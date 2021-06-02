@section('title')
    <title>Edit Kompetensi Dasar Kelas 3</title>
@endsection

@extends('home')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Kompetensi Dasar Kelas 3</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    @foreach($kompetensidasar as $k)
                    <form action="{{url('/kompetensidasar/update')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="id_presensi" value="{{$p->id_presensi}}" class="form-control " hidden>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jumlah Sakit <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="sakit" required="required" value="{{$p->sakit}}" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jumlah Ijin <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="ijin" required="required" value="{{$p->ijin}}" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jumlah Absen <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" name="absen" required="required" value="{{$p->absen}}" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Pilih Tahun Pelajaran<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_tapel" required>
                                @foreach( $tahun_pelajaran as $t )    
                                    <option value="{{ $t -> id_tapel }}" selected>
                                        {{ $t -> tapel }}
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