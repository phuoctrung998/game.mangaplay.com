@include('frontend.partials.head')
@include('frontend.partials.header')

<title>game.mangaplay.com/{{$chitiet->slug}}</title>

                    <?php
                    //xét điều kiện hiển thị
                    $id = $chitiet->post_cat_id;

                    if ($id == 1){
                          $id = 'Tin tức';
                    } elseif ($id == 2) {
                         $id = 'Sự kiện';
                    }
                    ?>

    <div class='tls-detail d-flex'>
      <div class='container'>
        <!-- begin: content body -->
            <div class='content-detail'>
                <h1><span style="color:chartreuse"><img src='./frontend/images/icon-tintuc.png'> Chuyên mục {{ $id }}</h1></span>
            </div>
            <div class='content-sukien scroll-box mt-4'>
                <div class='title-sukien border-bottom mb-4'>
                    <p><h4><span style="color:blue"><strong>{{$chitiet->name}}</p></strong></h4></span>
                    <i>{{$chitiet->updated_at}}</i>
                </div>
                <div class="content-sukien--text">
               <?php  echo $chitiet->body; ?>
                </div>
            </div>
        <!-- end: content body -->

      </div>
    </div>



        <!-- end: content body -->




@include('frontend.partials.footer')
