@extends('admin.dashboard')
<title>Thêm mới</title>
@section('content')
<body>

<h4><center>Create New Post_cates</h4></center>
    <div class="container">
        <div class="row justify-content-center">

            <div class="card-body">
                            <form method="POST" id="form" action="{{ route('admin.post.add') }}"  enctype="multipart/form-data">
                                @csrf

                            <div class="row">
                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                                <div class="form-group field">
                                <label for="name" class="col-md-1 col-form-label text-md-right">Name</label>
                                <div class="col-md-12">
                                        <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                            </div>



                            <div class="form-group field">

                            <label for="name" class="col-md-1 col-form-label text-md-right">Parent_Id</label>
                                <div class="col-md-12">
                                    <input id="parent_id"   type="text" class="form-control @error('parent_id') is-invalid @enderror"
                                    name="parent_id" value="{{ old('parent_id') }}" required autocomplete="parent_id" >

                                    @error('parent_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Meta_title</label>
                                <div class="col-md-12">
                                    <input id="meta_title"   type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ old('meta_title') }}" required autocomplete="meta_title" >

                                    @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Meta_description</label>
                                <div class="col-md-12">
                                    <textarea id="meta_description" cols="10" rows="7" type="text" class="form-control @error('meta_description') is-invalid @enderror"
                                    name="meta_description" value="{{ old('meta_description') }}" required autocomplete="" autofocus></textarea><br>


                                </div>
                            </div>
                        </div><br>



                        <div class="col-lg-4">
                            <div class="field" style="background-color:#f2f2f2"><br>
                                <center><button  name="upload" type="submit" class="btn btn-success">
                                <h4>ĐĂNG BÀI</h4></button></center><br>
                            </div><br>
                                <div class="field">
                                    <div class="m-portlet m-portlet--tab" >
                                        <div class="m-portlet__body">
                                            <div class="col-sm-12" style="background-color:#f2f2f2;border:inset" ><br>
                                                <div class="form-group field-posts-images has-success" >

                                                <label class="control-label" for="images">Hình ảnh</label>
                                                <input type="file" id="images" class="form-control" name="images">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
