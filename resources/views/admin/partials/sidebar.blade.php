 <!--**********************************
        Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color:chocolate">
            <div class="brand-logo"><a href="/admin/dashboard"><b><img src="/images/logo.png" alt=""> </b><span class="brand-title"><img src="/images/logo-text.png" alt=""></span></a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->

        <div class="nk-sidebar" style="background-color:lightgrey" >
            <div class="nk-nav-scroll"  >
                <ul class="metismenu" id="menu" style="background-color:lightgrey">
                    <li class="nav-label"><a href="http://game.mangaplay.com/admin/dashboard">Dashboard</a></li>

                    <li class="nav-label"> Components</li>
                    <li class="mega-menu mega-menu-md"><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="mdi mdi-television-guide"></i><span class="nav-text">Post &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i> </span></a>


                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/post/addpost')}}">Posts</a>
                            </li>
                            <li><a href="{{url('/admin/post/postlist')}}">Posts_list</a>
                            </li>
                            <li><a href="{{url('/admin/post/addpostcates')}}">Post_cates</a>
                            </li>
                            <li><a href="{{url('/admin/post/postcateslist')}}">Post_cates_list</a>


                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-xl"><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="mdi mdi-collage"></i><span class="nav-text">Slide &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span> </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/sliders/addsliders')}}">Sliders </a>
                            </li>
                            <li><a href="{{url('/admin/sliders/sliderslist')}}">Sliders_list</a>
                            </li>
                            <li><a href="{{url('/admin/sliders/addslidercates')}}">Slider_cates</a>
                            </li>
                            <li><a href="{{url('/admin/sliders/slidercateslist')}}">Slider_cates_list</a>
                            </li>


                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-widgets">
                    </i><span class="nav-text">Trade &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span> </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/trade/addmkt')}}">Mkt</a>
                            </li>
                            <li><a href="{{url('/admin/trade/mktlist')}}">Mkt_list</a>
                            </li>
                            <li><a href="{{url('/admin/trade/addmoneymkt')}}">MoneyMkt</a>
                            </li>
                            <li><a href="{{url('/admin/trade/moneymktlist')}}">MoneyMkt_list</a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-label">App </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-email-outline"></i>
                    <span class="nav-text">Email &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Inbox</a>
                            </li>
                            <li><a href="#">Read</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-application"></i>
                    <span class="nav-text">Giftcode &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span></a>
                        <ul aria-expanded="false">
                        <li><a href="{{url('/admin/giftcode/addgiftcode')}}">Giftcode</a>
                            </li>
                            <li><a href="{{url('/admin/giftcode/giftcodelist')}}">Giftcode_list</a>
                            </li>
                            <li><a href="{{url('/admin/giftcode/addgiftcodecates')}}">Giftcode_cate</a>
                            </li>
                            <li><a href="{{url('/admin/giftcode/giftcodecateslist')}}">Giftcode_cate_list</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-ticket"></i>
                    <span class="nav-text">Mini Game &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span> </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Minigame_Outcome</a>
                            </li>
                            <li><a href="#">Minigame_ShareFb</a>
                            </li>
                            <li><a href="#">Minigame_Vongxoay_reward</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-label">System</li>
                    <li class="mega-menu mega-menu-lg"><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="mdi mdi-gradient"></i><span class="nav-text">Forms &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">System_config</a>
                            </li>
                            <li><a href="#">System_config_value</a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-label">User </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-table"></i>
                    <span class="nav-text">Username &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span></a>
                        <ul aria-expanded="false">

                            <li><a href="{{url('/admin/user/list')}}" aria-expanded="false">List User</a>
                            </li>

                            <!-- <li><a href="./table-jtable.html">Jtable</a>
                            </li> -->
                            <!-- <li><a href="./table-handsonetable.html">Handsonetable</a>
                            </li> -->

                        </ul>
                    </li>
                    <li class="nav-label">ADMIN </li>
                    <li><a class="has-arrow" href="/listadmin" aria-expanded="false"><i class="mdi mdi-message-draw"></i>
                    <span class="nav-text">List Admin &emsp; <i class="fa fa-chevron-down" aria-hidden="true"> </i></span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/listadmin')}}">Admin Infor</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->
