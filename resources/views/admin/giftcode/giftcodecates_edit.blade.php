@extends('admin.dashboard')

@section('content')

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong><h3>Sửa thông tin</h3></strong></div>

                    <div class="card-body" >
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Name</label>
                                <div class="col-md-12">
                                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Code</label>
                                <div class="col-md-12">
                                    <input id="code"   type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $user->code }}" required autocomplete="code" >

                                    @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Status</label>

                                <div class="col-md-12">
                                    <select id="status"   type="text" class="form-control @error('status') is-invalid @enderror"
                                     name="status" value="{{ $user->status }}" required autocomplete="status" >
                                    <option value="1">Active</option>
                                    <option value="0">None</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Flag_home</label>
                                <div class="col-md-12">
                                    <input id="flag_home"   type="text" class="form-control @error('flag_home') is-invalid @enderror" name="flag_home" value="{{ $user->flag_home }}" required autocomplete="flag_home" >

                                    @error('flag_home')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                <button type="submit" style="width:75px;height:50px" class="btn btn-success">
                                        SAVE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
