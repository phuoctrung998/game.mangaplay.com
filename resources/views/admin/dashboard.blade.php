
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

@include('admin.partials.head')

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        <!--**********************************
            Header start
        ***********************************-->
        @include('admin.partials.header')
        <!--**********************************
            Header end
        ***********************************-->

        @include('admin.partials.sidebar')


        <!--**********************************
            Content body start
        ***********************************-->
        <br>
        <div class="content-body" ">
            <div class="container-fluid">


                <div class="row" id="dragdrop">
                    <div class="col-12">
                <div class="main-page">
                @yield('content')
                </div>
                </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('admin.partials.footer')
        <!--**********************************
            Footer end
        ***********************************-->


        <!--**********************************
            Right sidebar start
        ***********************************-->

        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('admin_assets/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/custom.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/settings.js')}}"></script>
    <script src="{{ asset('admin_assets/js/gleek.js')}}"></script>
    <script src="{{ asset('admin_assets/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs chart -->
    <script src="{{ asset('admin_assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('admin_assets/plugins/d3v3/index.js')}}"></script>
    <script src="{{ asset('admin_assets/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{ asset('admin_assets/plugins/datamaps/datamaps.world.min.js')}}"></script>

    <script src="v/js/plugins-init/datamap-world-init.js')}}"></script>

    <script src="{{ asset('admin_assets/plugins/datamaps/datamaps.usa.min.js')}}"></script>

    <script src="{{ asset('admin_assets/js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{ asset('admin_assets/js/plugins-init/datamap-usa-init.js')}}"></script>
</body>
</html>

