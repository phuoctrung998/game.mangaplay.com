@extends('admin.dashboard')
<title>Cập nhật: {{ $post->name }}</title>
@section('content')

<body>


    <div class="container-fluid">
        <div class="row justify-content-center">

                <div class="card">
                    <div class="card-header"><strong><h3>Cập nhật: {{ $post->name }}</h3></strong></div>

                    <div class="card-body" >
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

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Cate_Id</label>
                                <div class="col-md-12">
                                    <select id="cate_id"   type="text" class="form-control @error('cate_id') is-invalid @enderror" name="cate_id"
                                    value="{{ $post->cate_id }}" required autocomplete="cate_id" >

                                    @foreach($postcates as $postcate)

                                        <option>{{ $postcate->parent_id }}</option>
                                        @endforeach
                                        </select>
                                    @error('cate_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Meta_title</label>
                                <div class="col-md-12">
                                    <input id="meta_title"   type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title"
                                     value="{{ $post->meta_title }}" required autocomplete="meta_title" >

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




                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Quote</label>
                                <div class="col-md-12">
                                    <textarea id="quote" cols="10" rows="3" type="text" class="form-control @error('quote') is-invalid @enderror" name="quote"
                                    value="{{ $post->quote }}" required autocomplete="" autofocus></textarea>

                                    @error('quote')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Body</label>
                            <div class="col-md-12">
                                     <textarea id="body" cols="30" rows="10" type="textarea" class="form-control @error('body') is-invalid @enderror"
                                     name="body" value="{{ $post->body }}" required autocomplete="" autofocus> {{ $post->body }}</textarea>
                                <script src={{ url('ckeditor/ckeditor.js') }}></script>
                                <script>
                                CKEDITOR.replace( 'body', {
                                    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                                } );
                                </script>
                                @include('ckfinder::setup')
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Slug</label>
                                <div class="col-md-12">
                                    <input id="slug"  type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ $post->slug }}" required autocomplete="" autofocus>

                                    @error('slug')
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
                                <h4>SAVE</h4></button></center><br>

                                <div class="help-block"></div>
                                </div>
                                <br>

                                <div class="field" >

                                                <div class="col-sm-12" style="background-color:#f2f2f2;border:inset"><br>
                                                    <div class="form-group field-posts-is_timer has-success" >
                                                        <label class="control-label" for="is_timer">Hẹn giờ</label>
                                                        <select id="is_timer" class="form-control" name="is_timer">
                                                            <option value="0">Không hẹn giờ</option>
                                                            <option value="1">Hẹn giờ</option>
                                                        </select>
                                                        </div>
                                                        <div class="field">
                                                        <div class="form-group field-posts-_timer has-success" >
                                                        <label class="control-label" for="timer">Thời gian hẹn giờ</label>
                                                        <input type="date" id="timer" class="form-control" name="timer">
                                                        </div>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><br>
                                    </div>



                                    <div class="field" >
                                    <div class="col-sm-12" style="background-color:#f2f2f2;border:inset;border-top:none"><br>
                                        <div class="form-group field-posts-is_hot has-success" >
                                            <label class="control-label" for="is_hot">Hot</label>
                                            <select id="is_hot" class="form-control" name="is_hot">
                                                <option value="0">Thường</option>
                                                <option value="1">Hot</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field">&nbsp;</div>

                                    <div class="field" >
                                    <div class="col-sm-12" style="background-color:#f2f2f2;border:inset"><br>
                                        <div class="form-group field-posts-post_cat_id has-success" >
                                            <label class="control-label" for="post_cat_id">Danh mục</label>
                                            <select id="post_cat_id" class="form-control" name="post_cat_id">
                                                <option value="1">Tin tức</option>
                                                <option value="2">Sự kiện</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field">&nbsp;</div>

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
