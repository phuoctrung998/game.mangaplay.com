@extends('admin.dashboard')

@section('content')
<status>

<h4><center>Create New Sliders</h4></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


                    <div class="card-status">
                        <form method="POST" action="{{ route('admin.sliders.addSliders') }}" enctype="multipart/form-data" >
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
                            <label for="name" class="col-md-1 col-form-label text-md-right">Slider_cate_id</label>
                                <div class="col-md-12">
                                <select id="slider_cate_id" class="form-control @error('slider_cate_id') is-invalid @enderror" name="slider_cate_id"  required autocomplete="" autofocus>
                                @foreach($sliders as $slider)

                                <option>{{ $slider->codes }}</option>
                                @endforeach
                                </select>

                                    @error('slider_cate_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Url</label>
                                <div class="col-md-12">
                                    <input id="url"   type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" >

                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Description</label>
                                <div class="col-md-12">
                                    <textarea id="description" cols="10" rows="5" type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                                    value="{{ old('description') }}" required autocomplete="" autofocus></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Sort</label>
                                <div class="col-md-12">
                                    <input id="sort"  type="text" class="form-control @error('sort') is-invalid @enderror" name="sort" value="{{ old('sort') }}" required autocomplete="" autofocus>

                                    @error('sort')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group field">
                            <label for="name" class="col-md-1 col-form-label text-md-right">Status</label>
                                <div class="col-md-12">
                                    <select id="status" class="form-control" name="status">
                                             <option value="0">Không kích hoạt</option>
                                             <option value="1">Kích hoạt</option>
                                    </select><br>
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
                                <h4>SAVE</h4></button></center><br>

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
@endsection
