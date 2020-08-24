@extends('admin.dashboard')

@section('content')
<body>

<h4><center>Create</h4></center>
    <div class="container">
        <div class="row justify-content-center">



                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.trade.addMkt') }}" >
                            @csrf

                            <div class="row">

                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>

                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Source</label>
                                <div class="col-md-12">
                                    <input id="source"  type="text" class="form-control @error('sourcesource') is-invalid @enderror" name="source" value="{{ old('source') }}" required autocomplete="" autofocus>

                                    @error('source')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group field">

                            <label for="name" class="col-md-1 col-form-label text-md-right">Member_id</label>
                                <div class="col-md-12">
                                    <input id="member_id"   type="text" class="form-control @error('member_id') is-invalid @enderror" name="member_id" value="{{ old('member_id') }}" required autocomplete="member_id" >

                                    @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Username</label>
                                <div class="col-md-12">
                                    <input id="username"   type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" >

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Action</label>

                                <div class="col-md-12">

                                    <select id="action" class="form-control" name="action">
                                             <option value="0">Click</option>
                                             <option value="1">Đăng ký</option>
                                             <option value="2">Đăng nhập</option>
                                    </select><br>
                                    @error('action')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                </div>
                            </div><br>




                            <div class="form-group row mb-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" style="width:100px;height:75px" class="btn btn-success">
                                       SAVE
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

    </div>
@endsection
