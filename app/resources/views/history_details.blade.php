@include('inc/headview')
    <body class="theme-blue">
    <div class="body" style="margin-top: 25px;padding:50px;">
        <div class="row clearfix col-lg-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                        <div class="pull-left" style="color:#16a085;">
                            <h4><i class="fa fa-home"></i> CLIENT PRODUCTION HISTORY DETAILS</h4>
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
                <div class="card">
                    <div class="header">
                        <p>This page displays client order history with the window to view every particular order's full details.</p>
                    </div>
                </div>
                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    HISTORY KEY INDICATOR
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="thumbnail-heading bg-blue" style="padding: 1px 5px; height: 50px; width: 100%; text-align: left;">
                                                <h3 class="thumbnail-title">ORDERED BY</h3>
                                            </div>
                                            <div class="caption">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Name :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $users->name }}</label></div>
                                                        </div>
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Department :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $users->department }}</label></div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Email :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $users->email }}</label></div>
                                                        </div>
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Phone Number :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $users->phone }}</label></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="thumbnail-heading bg-blue" style="padding: 1px 5px; height: 50px; width: 100%; text-align: left;">
                                                <h3 class="thumbnail-title">CLIENT DETAILS</h3>
                                            </div>
                                            <div class="caption">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Name :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $clients->client_name }}</label></div>
                                                        </div>
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Email :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $clients->client_email }}</label></div>
                                                        </div>
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Phone Number :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $clients->client_phone }}</label></div>
                                                        </div>
                                                        <div class="col-lg-12 arrange">
                                                            <div class="col-lg-4 col-md-4 left"><label>Address :</label></div>
                                                            <div class="col-lg-8 col-md-8"><label>{{ $clients->client_delivery_address }}</label></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <div class="">
                                            <div class="thumbnail-heading bg-blue" style="padding: 1px 5px; height: 50px; width: 100%; text-align: left;">
                                                <h3 class="thumbnail-title">WORKERS</h3>
                                            </div>
                                            <div class="caption">
                                                <div class="col-lg-4 col-md-6 col-sm-12 thumbnail">
                                                @if($orders->carpenter_id)
                                                    <div style="height: 30px; width: 100%; padding: 5px 5px;" class="bg-teal"><b>Carpenter</b></div>
                                                    <br>
                                                    <br>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Name :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carps->name }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Phone Number :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carps->phone }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Email :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carps->email }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Gender :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carps->sex }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>State :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carps->state }}</label></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 thumbnail">
                                                    <div style="height: 30px; width: 100%; padding: 5px 5px;" class="bg-teal"><b>Upholsterer</b></div>
                                                    <br>
                                                    <br>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Name :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $ups->name }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Phone Number :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $ups->phone }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Email :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $ups->email }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Gender :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $ups->sex }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>State :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $ups->state }}</label></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 thumbnail">
                                                    <div style="height: 30px; width: 100%; padding: 5px 5px;" class="bg-teal"><b>Sprayer</b></div>
                                                    <br>
                                                    <br>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Name :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $sprays->name }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Phone Number :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $sprays->phone }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Email :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $sprays->email }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Gender :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $sprays->sex }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>State :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $sprays->state }}</label></div>
                                                            </div>
                                                        </div>
                                                        @elseif($orders->laminate_id)
                                                        <div style="height: 30px; width: 100%; padding: 5px 5px;" class="bg-teal"><b>Laminate</b></div>
                                                        <br>
                                                        <br>
                                                        <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Name :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carp->name }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Phone Number :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carp->phone }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Email :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carp->email }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>Gender :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carp->sex }}</label></div>
                                                            </div>
                                                            <div class="col-lg-12 arrange">
                                                                <div class="col-lg-6 col-md-6 left"><label>State :</label></div>
                                                                <div class="col-lg-6 col-md-6"><label>{{ $carp->state }}</label></div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                        </div>
                        <center></center>
                    </div>
                </div><!-- end of widgets -->
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ url('/plugins/sweetalert/sweetalert.min.js') }}"></script>


    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ url('/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ url('/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url('/js/admin.js') }}"></script>
    <script src="{{ url('/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ url('/js/pages/ui/dialogs.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ url('/js/demo.js') }}"></script>
</body>
</html>