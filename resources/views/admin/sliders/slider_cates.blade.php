@extends('admin.dashboard')

@section('content')
<body>

<h4><center>Create New Slider_cates</h4></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.sliders.up') }}" >
                            @csrf
                            <div class="row">
                        <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                            <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Name</label>
                                <div class="col-md-12">
                                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                            <label for="name" class="col-md-1 col-form-label text-md-right">Codes</label>
                                <div class="col-md-12">
                                    <input id="codes"   type="text" class="form-control @error('codes') is-invalid @enderror" name="codes" value="{{ old('codes') }}" required autocomplete="codes" >

                                    @error('codes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Status</label>
                                <div class="col-md-12">
                                    <select id="status"   type="text" class="form-control @error('status') is-invalid @enderror"
                                    name="status" value="{{ old('status') }}" required autocomplete="status" >
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
                        </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" style="width:100px;height:75px" class="btn btn-success">
                                       CREATE
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
