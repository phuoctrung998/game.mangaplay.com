@include('frontend.partials.head')
@include('frontend.partials.header')
<title>Sự kiện</title>


    <div class='tls-detail d-flex'>
      <div class='container'>
        <!-- begin: content body -->
            <div class='content-detail'>
                <h1><span><img src='./frontend/images/icon-sukien.png'></span>SỰ KIỆN</h1>
            </div>

            <div class='content-tintuc scroll-box mt-4'>

                @foreach($posts as $post )
                <ul>
                <li class='box-tintuc'><a>
                <a href="{{url('/'.$post->slug)}}">
                    <img src='{{ $post->images }}' style="height:150px; width:150px">
                    </a>
                    <div class='float-right box-text'>
                    <a href="{{url('/'.$post->slug)}}">
                            <p>

                                <strong>{{ $post->name }} </strong>
                                <span>
                                {{ $post->updated_at }}
                                </span>
                            </p>
                    </a>
                            <span><?php echo $post->quote; ?></span>

                        </div>

                    </li>
                    </ul>
                    @endforeach

            </div>

        <!-- end: content body -->

      </div>
    </div>
    @include('frontend.partials.footer')

