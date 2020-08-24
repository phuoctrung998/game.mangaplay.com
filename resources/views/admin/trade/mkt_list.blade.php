@extends('admin.dashboard')

@section('content')

<body>
<h1><center> Danh sách </h1></center>
<div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                    <thead class="thead-success">
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th>Source</th>
                                            <th>Member_id</th>
                                            <th>Username</th>
                                            <th>Created_at</th>
                                            <th>Status</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($mkt as $mkts)

                                    <?php
                                        //xét điều kiện hiển thị
                                        $status = $mkts->action;

                                        if ($status == 0){
                                            $$status = 'Click';
                                        } elseif ($status == 1) {
                                            $status = 'Đăng ký';
                                        } elseif ($status == 2) {
                                            $status= 'Đăng nhập';
                                        }


                                    ?>


                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $mkts-> id }}</td>
                                            <td>{{ $mkts->source }}</td>
                                            <td>{{ $mkts->member_id }}</td>
                                            <td>{{ $mkts->username }}</td>
                                            <td>{{ $mkts->created_at }}</td>
                                            <td>{{ $status }}</td>


                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 80px;">

                                            <a href="{{url('/admin/trade/editmkt/'.$mkts->id)}}">
                                             <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a href="{{url('/admin/trade/deletemkt/'.$mkts->id)}}">
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
