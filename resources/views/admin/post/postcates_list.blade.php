@extends('admin.dashboard')
<title>Danh sách </title>
@section('content')

<body>
<h1><center> Danh sách bài đăng</h1></center>
<div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                <thead class="thead-success">
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th>Images</th>
                                            <th> Name</th>
                                            <th>Parent_id</th>
                                            <th>Meta_title</th>
                                            <th>Meta_des</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{$post-> id }}</td>
                                            <td> <img src='{{ $post->images }}' style="height:100px; width:100px"></td>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->parent_id }}</td>
                                            <td>{{ $post->meta_title }}</td>
                                            <td>{{ $post->meta_description }}</td>


                                            <td>
                                            <a href="{{url('/admin/post/editpostcates/'.$post->id)}}">
                                             <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>

                                            <a onclick="return confirm('Delete this post ?')"  href="{{url('/admin/post/deletepostcates/'.$post->id)}}">
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
