@extends('admin.dashboard')

@section('content')

<body>
<h1><center> List </h1></center>
<div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table  id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                <thead class="thead-success">

                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th>Giftcode</th>
                                            <th>Status</th>
                                            <th>Member_id</th>
                                            <th>Giftcode_cate_id</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($codes as $code)

                                    <?php
                                        //xét điều kiện hiển thị
                                        $id = $code->status;

                                        if ($id == 1){
                                            $id = 'Active';
                                        } elseif ($id == 0) {
                                            $id = 'None';
                                        }



                                    ?>


                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $code-> id }}</td>
                                            <td>{{ $code->giftcode }}</td>
                                            <td>{{ $id }}</td>
                                            <td>{{ $code->member_id }}</td>
                                            <td>{{ $code->giftcode_cate_id }}</td>
                                            <td>{{ $code->updated_at }}</td>

                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 80px;">

                                            <a href="{{url('/admin/giftcode/editgiftcode/'.$code->id)}}">
                                            <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a href="{{url('/admin/giftcode/deletegiftcode/'.$code->id)}}">
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
