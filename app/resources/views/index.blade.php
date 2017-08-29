{{ $title = "Welcome - Dashboard" }}
@include('inc/head')
<body class="theme-blue">
    @include('inc/loader')
    <div class="overlay"></div>
    @include('inc/nav')
    @include('inc/sidebar')
    <section class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> DASHBOARD</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" align="">
                    <div class="pull-right">
                        <span class="text-primary glyphicon glyphicon-calendar">
                        <?php
                            $Today = date('y:m:d');
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                        ?>
                        </span>
                    </div>
                </div>
            </div><hr>
        <div class="container-fluid">
            @include('inc.success')
            <div class="card">
                <div class="header">
                    <h2>DASHBOARD</h2>
                    <p>This page displays an overview of the the application, quick links to other pages, sidebar, and statistics graph. Please click on any of the links you wish to access.</p>
                </div>
            </div>
            <!--1st row-->
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal">
                        <div class="icon">
                            <i class="material-icons">local_mall</i>
                        </div>   
                        <div class="content">
                            <center><div class="text">ITEMS</div>
                            <i class="material-icons">local_mall</i></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">brush</i>
                        </div>
                        <div class="content">
                            <div class="text">ORDERS</div>
                            <i class="material-icons">local_mall</i></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">STAFF</div>
                            <i class="material-icons">local_mall</i></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">done</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENTS</div>
                            <i class="material-icons">done</i></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">done_all</i>
                        </div>
                        <div class="content">
                            <div class="text">WAREHOUSE</div>
                            <i class="material-icons">done_all</i></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="info-box-3 bg-teal hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">gavel</i>
                        </div>
                        <div class="content">
                            <div class="text">HISTORY</div>
                            <i class="material-icons">gravel</i></center>
                        </div>
                    </div>
                </div>
            </div><hr>
            <!--End of 1st row-->

            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PROCESSED ORDERS</h2>
                            <small>processed orders ontop of cancelled orders</small>
                        </div>
                        <div class="body">
                            <canvas id="line_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SATISFACTION MARGINS</h2>
                            <small>satisfactions margins of first time clients and returning clients</small>
                        </div>
                        <div class="body">
                            <canvas id="bar_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
            </div-->
        </div>
    </section>
    
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <!-- Select Plugin Js -->
    <script src="{{ url('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('plugins/node-waves/waves.js') }}"></script>
    <!-- Chart Plugins Js -->
    <script src="{{ url('plugins/chartjs/Chart.bundle.js') }}"></script>
    <!-- Flot Chart Plugins Js -->
    <script src="{{ url('plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ url('plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('plugins/flot-charts/jquery.flot.time.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ url('js/admin.js') }}"></script>
    <script src="{{ url('js/pages/charts/chartjs.js') }}"></script>
    <script src="{{ url('js/pages/charts/flot.js') }}"></script>
    <!-- Demo Js -->
    <script src="{{ url('js/demo.js') }}"></script>
</body>
</html>