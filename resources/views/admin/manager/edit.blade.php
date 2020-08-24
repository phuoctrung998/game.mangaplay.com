@extends('admin.dashboard')

@section('content')

<body>

<h4><center>Thông tin Admin: {{$user->name}}</h4></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">


                <div class="card-body" style="background-color:#f2f2f2;border:inset">
                        <form method="POST" action="" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                            <div class="col-lg-12"><br>
                            <div class="form-group row">
                                <label for="name" class="col-md-1 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-1 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" style="width:80px;height:40px" class="btn btn-success">
                                        UPDATE
                                    </button>
                                </div>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
