@extends('admin.dashboard')
<title>Danh sách bài viết</title></title>
@section('content')

<body>
<div class="m-portlet__head">
 <div class="m-portlet__head-caption">
 <div class="m-portlet__head-title">
	<center><h3 class="m-portlet__head-text">
		Danh sách bài viết
	</h3></center>
</div>
</div>


</div>
<div class="container">

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="m-portlet__head-tools">
                            <a class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" href="/admin/post/addpost"><span>
                            <i class="fa fa-gamepad"></i>
                                <span>
                                    Thêm mới bài viết
                                </span>
                                </span></a>
                            </div><br>
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                    <thead class="thead-success">

                                        <tr>

                                            <th data-breakpoints="xs">#</th>

                                            <th><strong><span style="color:yellow">Images</span></strong></th>
                                            <th><strong><span style="color:yellow">Name</span></strong></th>
                                            <th><strong><span style="color:yellow">Cate_id</span></strong></th>
                                            <th><strong><span style="color:yellow">Cat Name</span></strong></th>
                                            <th><strong><span style="color:yellow">Hot</span></strong></th>
                                            <th><strong><span style="color:yellow">Updated_at</span></strong></th>
                                            <th><strong><span style="color:yellow">Action</span></strong></th>

                                        </tr>
                                    </thead>
                                    <tbody>



                                    @foreach($posts as $post)
                                    <?php
                                        //xét điều kiện hiển thị
                                        $id = $post->post_cat_id;

                                        if ($id == 1){
                                            $id = 'Tin tức';
                                        } elseif ($id == 2) {
                                            $id = 'Sự kiện';
                                        }  else {
                                            $id= 'Khác';
                                        }

                                        $hot = $post->is_hot;
                                        if ($hot == 0){
                                            $hot = 'Thường';
                                        } elseif ($hot == 1) {
                                            $hot = 'Hot';
                                        }

                                    ?>

                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $post-> id }}</td>

                                            <td> <img src='{{ $post->images }}' style="height:100px; width:100px"></td>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->cate_id }}</td>
                                            <td>{{ $id }}</td>
                                            <td>{{ $hot }}</td>

                                            <td>{{ $post->updated_at }}</td>

                                            <td>
                                            <a href="{{url('/admin/post/editpost/'.$post->id)}}">
                                             <span class="glyphicon glyphicon-pencil" title="Edit"></span>
                                            </a>
                                            <a href="{{url('/'.$post->slug)}}" target="blank">
                                             <span class="glyphicon glyphicon-play-circle" title="View"></span>
                                            </a>
                                            <a onclick="return confirm('Delete this post ?')" href="{{url('/admin/post/deletepost/'.$post->id)}}" >
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
