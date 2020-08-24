@extends('admin.dashboard')

@section('content')

<body>

<h4><center>Edit Slider_cates {{$user->id}}</h4></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8"  style="background-color:#f2f2f2;border:inset"><br>
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

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Codes</label>
                                <div class="col-md-12">
                                    <input id="codes"   type="text" class="form-control @error('codes') is-invalid @enderror" name="codes" value="{{ $user->codes }}" required autocomplete="codes" >

                                    @error('codes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Status</label>

                                <div class="col-md-12">
                                    <select id="status"   type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $user->status }}" required autocomplete="status" >
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Update') }}
                                    </button>
                                </div>
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
