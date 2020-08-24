@extends('admin.dashboard')

@section('content')
<body>

<h3><center>Thêm Admin</h3></center>
    <div class="container">
        <div class="row justify-content-center">


        <div class="col-md-2"></div>
                    <div class="card-body"   style="background-color:#f2f2f2;border:inset">
                        <form method="POST" action="{{ url('/admin/addadmin') }}" >
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="email"  placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="password"  placeholder="Password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 offset-md-5">
                                    <button type="passwordmit" style="width:75px;height:40px" class="btn btn-success">
                                        CREATE
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
