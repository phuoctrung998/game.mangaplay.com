@extends('admin.dashboard')

@section('content')

<body>
<h1><center> List Slider_cates </h1></center>
<div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                <thead class="thead-success">
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th> Name</th>
                                            <th>Codes</th>
                                            <th>Status</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cates as $cate)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $cate-> id }}</td>
                                            <td>{{ $cate->name }}</td>
                                            <td>{{ $cate->codes }}</td>
                                            <td>{{ $cate->status }}</td>
                                            <td>{{ $cate->updated_at }}</td>

                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 80px;">

                                            <a href="{{url('/admin/sliders/editslidercates/'.$cate->id)}}">
                                            <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a onclick="return confirm('Delete this sliders ?')" href="{{url('/admin/sliders/deleteslidercates/'.$cate->id)}}">
                                                    <span class="glyphicon glyphicon-trash" title="Delete"></span>
                                            </a>

                                            </td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
    </body>
</html>
@endsection
