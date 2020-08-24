@extends('admin.dashboard')
<title>Cập nhật: {{ $post->name }}</title>
@section('content')

<body>


    <div class="container">
        <div class="row justify-content-center">

        <div class="card-body" >
                    <div class="card-header"><strong><h3>Cập nhật: {{ $post->name }}</h3></strong></div>

                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Name</label>
                                <div class="col-md-12">
                                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                     value="{{ $post->name }}" required autocomplete="" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Parent_id</label>
                                <div class="col-md-12">
                                    <input id="parent_id"   type="text" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id"
                                     value="{{ $post->parent_id }}" required autocomplete="parent_id" >

                                    @error('parent_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Meta_title</label>
                                <div class="col-md-12">
                                    <textarea id="meta_title" cols="10" rows="3" type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title"
                                    value="{{ $post->meta_title }}" required autocomplete="" autofocus></textarea>

                                    @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Meta_description</label>
                                <div class="col-md-12">
                                    <textarea id="meta_description" cols="10" rows="4" type="text" class="form-control @error('meta_description') is-invalid @enderror"
                                    name="meta_description" value="{{ $post->meta_description }}" required autocomplete="" autofocus></textarea>

                                    @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            </div><br>


                            <div class="col-lg-4">
                                <div class="field"  style="background-color:#f2f2f2"><br>
                                <center><button  name="upload" type="submit" class="btn btn-success">
                                SAVE</button></center><br>

                                <div class="help-block"></div>
                                </div>
                                <br>




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
</html>
@endsection
