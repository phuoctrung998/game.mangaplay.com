

        <div class='event row p-0 m-0'>

            <div class='col-6 p-0 tinyslide' id="tiny">
                <div id="carouselId" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                        <li data-target="#carouselId" data-slide-to="3"></li>
                    </ol>


                    <div class="carousel-inner" role="listbox">

                        @foreach($sliders as $key => $slider)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">

                                <a href="{{ $slider->url }}"><span class="glyphicon glyphicon-pencil" title="{{ $slider->name }}">
                                <img  src="{{ $slider->images }}" style="width:480px;height:440px" alt=""></span></a>

                            </div>
                        @endforeach
                    </div>


                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
          </div>

          <div class='col-6 p-0'>
            <div class='bg-white '>
              <div class='pl-4 pr-4'>
                 <!-- Nav tabs -->

                <ul class="border-bottom nav nav-tabs pt-3 pb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class=" active" id="home-tab" data-toggle="tab" href="#noibat" role="tab" aria-controls="home" aria-selected="true">NỔI BẬT</a>
                    </li>
                    <li class='ml-2 mr-2'>|</li>
                    <li class="nav-item">
                      <a class="" id="profile-tab" data-toggle="tab" href="#tintuc" role="tab" aria-controls="profile" aria-selected="false">TIN TỨC</a>
                    </li>
                    <li class='ml-2 mr-2'>|</li>
                    <li class="nav-item">
                      <a class="" id="contact-tab" data-toggle="tab" href="#sukien" role="tab" aria-controls="contact" aria-selected="false">SỰ KIỆN</a>
                    </li>

                  </ul>
              </div>
              <!-- Tab panes -->

              <div class="tab-content content-event mt-2" id="myTabContent">
                  <div class="tab-pane fade show active" id="noibat" role="tabpanel" aria-labelledby="home-tab">
                    <ul class='pl-4 pr-4 '>
                    @foreach($hots as $hot)

                    <?php
                    //xét điều kiện hiển thị
                    $id = $hot->post_cat_id;

                    if ($id == 1){
                          $id = 'Tin tức';
                    } elseif ($id == 2) {
                         $id = 'Sự kiện';
                    } else {
                        $id= 'Khác';
                    }
                    ?>
                           <a href="{{url('/'.$hot->slug)}}">
                          <li class='w-100 mt-3'><span><strong> {{$id}} </strong>{{ $hot->name }}<span>{{ $hot->updated_at }}</span></span></li>

                          </a>
                         @endforeach

                    </ul>
                  </div>
                  <div class="tab-pane fade" id="tintuc" role="tabpanel" aria-labelledby="profile-tab">
                      <ul class='pl-4 pr-4 '>
                        @foreach($news as $new)
                           <a href="{{url('/'.$new->slug)}}">
                          <li class='w-100 mt-3'><span><strong>Tin tức</strong>{{ $new->name }}<span>{{ $new->updated_at }}</span></span></li>
                          </a>
                         @endforeach

                      </ul>
                  </div>
                  <div class="tab-pane fade" id="sukien" role="tabpanel" aria-labelledby="contact-tab">
                      <ul class='pl-4 pr-4 '>
                      @foreach($events as $event)
                           <a href="{{url('/'.$event->slug)}}">
                          <li class='w-100 mt-3'><span><strong>Sự kiện</strong>{{ $event->name }}<span>{{ $event->updated_at }}</span></span></li>
                          </a>
                         @endforeach
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
