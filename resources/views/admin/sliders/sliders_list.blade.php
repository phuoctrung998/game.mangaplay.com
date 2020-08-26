@extends('admin.dashboard')

@section('content')

<body>
<h1><center> List Sliders</h1></center>
<div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table  id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                <thead class="thead-success">

                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th>Images</th>
                                            <th> Name</th>
                                            <th>Slider_cate_id</th>
                                            <th>Url</th>
                                            <th>Description</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $slider-> id }}</td>
                                            <td><img src='{{ $slider->images }}' style="height:100px; width:150px"></td>
                                            <td>{{ $slider->name }}</td>
                                            <td>{{ $slider->slider_cate_id }}</td>
                                            <td><a target="blank" href="{{ $slider->url }}">{{ $slider->url }}</a></td>
                                            <td>{{ $slider->description }}</td>
                                            <td>{{ $slider->updated_at }}</td>

                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 80px;">

                                            <a href="{{url('/admin/sliders/editsliders/'.$slider->id)}}">
                                            <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a onclick="return confirm('Delete this sliders ?')" href="{{url('/admin/sliders/deletesliders/'.$slider->id)}}">
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
