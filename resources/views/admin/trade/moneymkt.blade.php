@extends('admin.dashboard')

@section('content')
<body>

<h4><center>Create</h4></center>
    <div class="container">
        <div class="row justify-content-center">



                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.trade.up') }}" >
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

                            <label for="name" class="col-md-1 col-form-label text-md-right">Money</label>
                                <div class="col-md-12">
                                    <input id="money"   type="text" class="form-control @error('money') is-invalid @enderror"
                                     name="money" value="{{ old('money') }}" required autocomplete="money" ><br>

                                    @error('money')
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
                                    <button type="imagesmit" style="width:100px;height:75px" class="btn btn-success">
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
