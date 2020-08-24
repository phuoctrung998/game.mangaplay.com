@extends('admin.dashboard')

@section('content')

<body>
<h1> Danh sách Admin</h1><br>
<a href="{{url('/admin/addadmin')}}" class="btn btn-success">Thêm Admin</a>
<div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                <thead class="thead-success">
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th> Name</th>
                                            <th>Email</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $user-> id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>

                                                 <a href="{{url('/admin/editadmin/'.$user->id)}}" class="btn btn-success">Edit</a>
                                                 <a onclick="return confirm('Delete this admin ?')" href="{{url('/admin/deleteadmin/'.$user->id)}}" class="btn btn-danger">Delete</a>
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
