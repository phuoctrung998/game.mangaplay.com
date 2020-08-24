@extends('admin.dashboard')

@section('content')

<body>

<h3><center>Cập nhật Slider: {{$slider->name}}</h3></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body" >
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Name</label>
                                <div class="col-md-12">
                                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $slider->name }}" required autocomplete="" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Slider_cate_id</label>
                                <div class="col-md-12">
                                    <input id="slider_cate_id"   type="text" class="form-control @error('slider_cate_id') is-invalid @enderror" name="slider_cate_id" value="{{ $slider->slider_cate_id }}" required autocomplete="slider_cate_id" >

                                    @error('slider_cate_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Url</label>
                                <div class="col-md-12">
                                    <input id="url"   type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $slider->url }}" required autocomplete="url" >

                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Description</label>
                                <div class="col-md-12">
                                    <input id="description"  type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $slider->description }}" required autocomplete="" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Sort</label>
                                <div class="col-md-12">
                                    <input id="sort"  type="text" class="form-control @error('sort') is-invalid @enderror" name="sort" value="{{ $slider->sort }}" required autocomplete="" autofocus>

                                    @error('sort')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Status</label>
                                <div class="col-md-12">
                                    <select id="status"  type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $slider->status}}" required autocomplete="" autofocus>
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



                            <div class="col-lg-4">
                                <div class="field"  style="background-color:#f2f2f2"><br>
                                <center><button  name="upload" type="submit" class="btn btn-success">
                                <h4>ĐĂNG BÀI</h4></button></center><br>

                                <div class="help-block"></div>
                                </div>
                                <br>


                                <div class="field">
                                    <div class="m-portlet m-portlet--tab" >
                                        <div class="m-portlet__body">
                                            <div class="col-sm-12" style="background-color:#f2f2f2;border:inset"><br>
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
