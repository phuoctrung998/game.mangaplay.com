@include('frontend.partials.head')
@include('frontend.partials.header')
<title>Trang chủ</title>


    <div class='tls-wrapper'>
      <div class='inner'>
        <!-- begin: noi bat, tin tuc, su kien -->



        @include('frontend.post')

        <!-- end: noi bat, tin tuc, su kien -->
        <!-- begin: ingame -->
        <div class='ingame row p-0 m-0'>
          <ul class='d-inline-flex m-0 p-0 mt-4 mb-4'>
            <li><img src='./frontend/images/ingame1.png'><a class='btn-ingame' data-toggle="modal" data-target="#ingame1">></a></li>
            <li><img src='./frontend/images/ingame2.png'><a class='btn-ingame' data-toggle="modal" data-target="#ingame2">></a></li>
            <li><img src='./frontend/images/ingame3.png'><a class='btn-ingame' data-toggle="modal" data-target="#ingame3">></a></li>
            <li><img src='./frontend/images/ingame4.png'><a class='btn-ingame' data-toggle="modal" data-target="#ingame4">></a></li>
          </ul>
        </div>
        <!-- end: ingame -->
        <!-- begin: he thong nhan vat -->
        <div class='hethongnhanvat row m-0 p-0'>
            <div class="col-12 center d-flex"><img src="./frontend/images/nhanvat/hethongnhanvat.png" alt=""></div>
            <div class='col-12 tls-content'>
              <!-- Begin: Nav tabs -->
              <div>
                  <ul class="nav nav-tabs pt-3 pb-3 ml-4" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class=" active" id="home-tab" data-toggle="tab" href="#icon1" role="tab" aria-controls="home" aria-selected="true"><img src='./frontend/images/nhanvat/icon-1.png'></a>
                      </li>
                      <li class="nav-item">
                        <a class="" id="profile-tab" data-toggle="tab" href="#icon2" role="tab" aria-controls="profile" aria-selected="false"><img src='./frontend/images/nhanvat/icon-2.png'></a>
                      </li>
                      <li class="nav-item">
                        <a class="" id="contact-tab" data-toggle="tab" href="#icon3" role="tab" aria-controls="contact" aria-selected="false"><img src='./frontend/images/nhanvat/icon-3.png'></a>
                      </li>
                      <li class="nav-item">
                          <a class="" id="profile-tab" data-toggle="tab" href="#icon4" role="tab" aria-controls="profile" aria-selected="false"><img src='./frontend/images/nhanvat/icon-4.png'></a>
                      </li>
                  </ul>
              </div>
              <!-- End: Nav tabs -->
              <!-- Begin: Tab panes -->
              <div class="tab-content" id="nav-tabContent">
                <!-- begin: icon 1 -->
                  <div class="container tab-pane active" id="icon1">
                      <div  class='text-color col-7 float-left'>
                         <div><img src='./frontend/images/nhanvat/phuthuy.png'></div>
                         <div>
                           <p>Anh hùng kiệt xuất, mưu lượt hơn người, luôn là nhân vật <br>đứng đầu, sáng lập</p>
                           <p>Sở trường: Tướng công kích</p>
                           <p>Kỹ năng: Đoạn Ảnh Kích - gây sát thương ma pháp lớn lên <br> mục tiêu đồng thời có xác suất gây thêm
                          sát thương<br> theo HP tối đa của mục tiêu</p>
                         </div>
                         <ul class='m-0 p-0 img-skill'>
                           <li><a><img src='./frontend/images/nhanvat/S_4.png'></a></li>
                           <li><a><img src='./frontend/images/nhanvat/S_5.png'></a></li>
                           <li><a><img src='./frontend/images/nhanvat/S_6.png'></a></li>
                           <li><a><img src='./frontend/images/nhanvat/S_7.png'></a></li>
                           <li><a><img src='./frontend/images/nhanvat/S_8.png'></a></li>
                           <li><a><img src='./frontend/images/nhanvat/S_9.png'></a></li>
                           <li><a><img src='./frontend/images/nhanvat/S_10.png'></a></li>
                         </ul>
                      </div>
                      <div class='col-5 float-right position-nv'><img src='./frontend/images/nhanvat/nhanvat1.png'></div>
                  </div>
                <!-- end: icon 1 -->
                <!-- begin: icon 2 -->
                  <div class="container tab-pane" id="icon2">
                    <div  class='text-color col-7 float-left'>
                       <div><img src='./frontend/images/nhanvat/nhangia.png'></div>
                       <div>
                         <p>Anh hùng kiệt xuất, mưu lượt hơn người, luôn là nhân vật <br>đứng đầu, sáng lập</p>
                         <p>Sở trường: Tướng công kích</p>
                         <p>Kỹ năng: Đoạn Ảnh Kích - gây sát thương ma pháp lớn lên <br> mục tiêu đồng thời có xác suất gây thêm
                        sát thương<br> theo HP tối đa của mục tiêu</p>
                       </div>
                       <ul class='m-0 p-0 img-skill'>
                         <li><a><img src='./frontend/images/nhanvat/S_4.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_5.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_6.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_7.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_8.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_9.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_10.png'></a></li>
                       </ul>
                    </div>
                    <div class='col-5 float-right position-nv'><img src='./frontend/images/nhanvat/nhanvat2.png'></div>
                  </div>
                <!-- end: icon 2 -->
                <!-- begin: icon 3 -->
                <div class="container tab-pane " id="icon3">
                    <div  class='text-color col-7 float-left'>
                       <div><img src='./frontend/images/nhanvat/phapsu.png'></div>
                       <div>
                         <p>Anh hùng kiệt xuất, mưu lượt hơn người, luôn là nhân vật <br>đứng đầu, sáng lập</p>
                         <p>Sở trường: Tướng công kích</p>
                         <p>Kỹ năng: Đoạn Ảnh Kích - gây sát thương ma pháp lớn lên <br> mục tiêu đồng thời có xác suất gây thêm
                        sát thương<br> theo HP tối đa của mục tiêu</p>
                       </div>
                       <ul class='m-0 p-0 img-skill'>
                         <li><a><img src='./frontend/images/nhanvat/S_4.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_5.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_6.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_7.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_8.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_9.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_10.png'></a></li>
                       </ul>
                    </div>
                    <div class='col-5 float-right position-nv'><img src='./frontend/images/nhanvat/nhanvat3.png'></div>
                </div>
                <!-- end: icon 3 -->
                <!-- begin: icon 4 -->
                <div class="container tab-pane " id="icon4">
                    <div  class='text-color col-7 float-left'>
                       <div><img src='./frontend/images/nhanvat/satthu.png'></div>
                       <div>
                         <p>Anh hùng kiệt xuất, mưu lượt hơn người, luôn là nhân vật <br>đứng đầu, sáng lập</p>
                         <p>Sở trường: Tướng công kích</p>
                         <p>Kỹ năng: Đoạn Ảnh Kích - gây sát thương ma pháp lớn lên <br> mục tiêu đồng thời có xác suất gây thêm
                        sát thương<br> theo HP tối đa của mục tiêu</p>
                       </div>
                       <ul class='m-0 p-0 img-skill'>
                         <li><a><img src='./frontend/images/nhanvat/S_4.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_5.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_6.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_7.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_8.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_9.png'></a></li>
                         <li><a><img src='./frontend/images/nhanvat/S_10.png'></a></li>
                       </ul>
                    </div>
                    <div class='col-5 float-right position-nv'><img src='./frontend/images/nhanvat/nhanvat4.png'></div>
                  </div>
                <!-- end: icon 4 -->
              </div>
              <!-- End: Tab panes -->
            </div>
        </div>
        <!-- end: he thong nhan vat -->
        <!-- begin: contact -->
        <div class='contact row m-0 p-0'>
          <div class='col-6 m-0 p-0'>
            <img src='./frontend/images/contact/hotline.png'>
            <div class='background-fb'>
              <div id="fb-root"></div>
              <div class="fb-page"
              data-href="https://www.facebook.com/phamnhantutien.H5/"
              data-width="460"
              data-hide-cover="false"
              data-show-facepile="true"></div>
            </div>
          </div>
          <div class='col-6 m-0 p-0 '>
              <ul class="border-double nav nav-tabs pt-3 pb-3" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class=" active" id="home-tab" data-toggle="tab" href="#hinhnen" role="tab" aria-controls="home" aria-selected="true">HÌNH NỀN</a>
                  </li>
                  <li class='ml-2 mr-2 mt-2'>|</li>
                  <li class="nav-item">
                    <a class="" id="profile-tab" data-toggle="tab" href="#video" role="tab" aria-controls="profile" aria-selected="false">VIDEO</a>
                  </li>
                  <li class='ml-2 mr-2 mt-2'>|</li>
                  <li class="nav-item">
                    <a class="" id="contact-tab" data-toggle="tab" href="#hinhanh" role="tab" aria-controls="contact" aria-selected="false">HÌNH ẢNH</a>
                  </li>
                  <li class='float-right plus cursor'><img src='./frontend/images/plus.gif'></li>
                </ul>
              <!-- Tab panes -->

              <div class="tab-content content-event gallery" id="myTabContent">
                  <div class="tab-pane fade show active" id="hinhnen" role="tabpanel" aria-labelledby="home-tab">
                    <ul class='m-0 p-0'>
                        @foreach($sliders as $slider)
                            <li><a>
                                <div class=''></div><img src='{{ $slider->images }}'></a></li>
                        @endforeach

                    </ul>
                  </div>
                  <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="profile-tab">
                      <ul class='m-0 p-0'>
                      @foreach($sliders as $slider)
                            <li><a>
                                <div class=''></div><img src='{{ $slider->images }}'></a></li>
                        @endforeach

                     </ul>
                  </div>
                  <div class="tab-pane fade" id="hinhanh" role="tabpanel" aria-labelledby="contact-tab">
                      <ul class='m-0 p-0'>
                      @foreach($sliders as $slider)
                            <li><a>
                                <div class=''></div><img src='{{ $slider->images }}'></a></li>
                        @endforeach

                      </ul>
                  </div>
              </div>
              <!-- end: Tab panes -->
          </div>
        </div>
        <!-- end: contact -->
        <!-- begin: footer -->

        @include('frontend.partials.footer')
