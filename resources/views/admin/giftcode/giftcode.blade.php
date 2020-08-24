@extends('admin.dashboard')

@section('content')
<status>

<h4><center>Create</h4></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


            <div class="card-body">
                        <form method="POST" action="{{ url('/admin/giftcode/addgiftcode') }}" >
                            @csrf
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                            <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Giftcode</label>
                                <div class="col-md-12">
                                    <input id="giftcode"  type="text" class="form-control @error('giftcode') is-invalid @enderror" name="giftcode" value="{{ old('giftcode') }}" required autocomplete="" autofocus>

                                    @error('giftcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Status</label>
                                <div class="col-md-12">
                                    <select id="status"  type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="" autofocus>
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

                            <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Giftcode_cate_id</label>

                                <div class="col-md-12">
                                    <select id="giftcode_cate_id"   type="text" class="form-control @error('giftcode_cate_id') is-invalid @enderror" name="giftcode_cate_id" value="{{ old('giftcode_cate_id') }}" required autocomplete="giftcode_cate_id" >
                                    @foreach($cates as $cate)
                                    <option>{{ $cate->code }}</option>
                                    @endforeach
                                    </select>
                                    @error('giftcode_cate_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" style="width:75px;height:50px" class="btn btn-success">
                                       SAVE
                                    </button>

                                </div>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
