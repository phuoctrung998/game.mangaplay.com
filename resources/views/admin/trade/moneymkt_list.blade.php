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
                                            <th>Money</th>
                                            <th>Update_at</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($moneymkt as $money)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $money-> id }}</td>
                                            <td>{{ $money->source }}</td>
                                            <td>{{ $money->money }}</td>
                                            <td>{{ $money->updated_at }}</td>

                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 80px;">

                                            <a href="{{url('/admin/trade/editmoneymkt/'.$money->id)}}">
                                             <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a href="{{url('/admin/trade/deletemoneymkt/'.$money->id)}}">
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
