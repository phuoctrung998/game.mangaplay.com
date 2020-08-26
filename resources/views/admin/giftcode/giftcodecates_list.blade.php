@extends('admin.dashboard')

@section('content')

<body>
<h1><center> List </h1></center>
<div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                <thead class="thead-success">
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Status</th>
                                            <th>Flag_home</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cates as $cate)

                                    <?php
                                        //xét điều kiện hiển thị
                                        $id = $cate->status;

                                        if ($id == 1){
                                            $id = 'Hoạt động';
                                        } elseif ($id == 0) {
                                            $id = 'None';
                                        }


                                    ?>
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $cate-> id }}</td>
                                            <td>{{ $cate->name }}</td>
                                            <td>{{ $cate->code }}</td>
                                            <td>{{ $id }}</td>
                                            <td>{{ $cate->flag_home }}</td>
                                            <td>{{ $cate->updated_at }}</td>


                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 80px;">

                                            <a href="{{url('/admin/giftcode/editgiftcodecates/'.$cate->id)}}">
                                            <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a onclick="return confirm('Delete this cates ?')"href="{{url('/admin/giftcode/deletegiftcodecates/'.$cate->id)}}">
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
