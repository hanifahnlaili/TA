@section('title')
    <title>Edit User</title>
@endsection

@extends('home')

@section('konten')
<div class="">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit User</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    @foreach($userpengguna as $u)
                    <form action="{{url('/user/update')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                        <input type="hidden" name="id" value="{{ $u->id_user }}"> 
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align disable" for="first-name">Username
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="username" required="required" value="{{$u->username}}" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" name="password" required="required" value="{{$u->password}}" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Pilih Tipe User<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="id_tipe_user" required>
                                @foreach( $tipe_user as $k )    
                                    <option value="{{ $k -> id_tipe_user }}" selected>
                                        {{ $k -> nama_tipe_user }}
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