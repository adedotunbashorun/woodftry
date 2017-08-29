<!DOCTYPE html>
<html>
@include('inc/headadd')
<body class="theme-blue">
    <!-- Page Loader -->
    @include('inc/loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    @include('inc/nav')
    <!-- #Top Bar -->
    @include('inc/sidebar')
@if(auth()->user()->access_level == '1' || auth()->user()->access_level == '2')
    <section class="content">  
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> PROCESS SEMI-FINISHED ORDER (CARPENTER) </h4>
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
                </div><hr/>
                <div class="col-lg-12">
                    @include('inc.errors')
                    @include('inc.success')
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <p>This page allows you to process and track semi-finished floor productions for carpenter.</p>
                    <p><a href="{{ url('/view-inhouse') }}"><button class="btn btn-warning">Return To Previous Page <i class="material-icons">arrow_back</i></button></a></p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            @if($orders->status == 0)
                            <div id="main-body">
                            <form class="form-horizontal" method="POST" action="" target="">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Order By</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-55">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" placeholder="username" value="{{ $users->name }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Product Key</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Product key" value="{{ $orders->product_key }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Client Name</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $clients->client_name }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Carpenter Name</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $carps->name }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Design Name</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" placeholder="Design Name" value="{{ $goods->design_name }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Description</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control" placeholder="Description" value="{{ $orders->item_size }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Current Quantity</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Quantity" value="{{ $orders->quantity }}" name="current" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Is Job Completed?</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                @if($orders->status == 0)
                                                <select class="form-control" id="select" name="quantity" required>
                                                    <option value="">- - Select YES or No- -    </option>
                                                    <option value="1">YES</option>
                                                    <option value="0">NO</option>
                                                </select>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div><hr/>
                                </div>
                                <div class="clearfix row" style="display: none;">
                                    @if($orders->status == 0)
                                    
                                    @elseif($orders->status == 1)
                                    <center><label for="email_address_2"><span style="color:red;">Please select the next person to process this order either UPHOLSTERY or SPRAYER</label></center><br/>
                                    @else
                                    @endif
                                </div>
                                <div class="clearfix row" style="display: none;" id="blank">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <input type="hidden" value="{{ $orders->quantity - $orders->finished_quantity }}" name="finished" >
                                        @if($orders->status == 0)
                                        <button type="submit" onclick="return confirm('Are you sure Carpenter job is completed?')" class="btn btn-primary">
                                        <i class="material-icons">file_download</i>Confirm Completion</button>
                                        @endif
                                    </div>
                                </div>
                            </form> 
                        </div>
                        @else
                        @endif
                        <div class="row clearfix" style="margin-bottom: 30px !important;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                @if($orders->status <= 4 && $orders->status >=1)
                                    @if($orders->current_quantity == 0)
                                    @else
                                    <button class="btn btn-primary" onclick="UpsTake()"><i class="material-icons">add</i> Send request to Upholstrey</button> OR 
                                    <button class="btn btn-primary" onclick="SprayTake()"><i class="material-icons">add</i> Send request to Sprayer</button>
                                    @endif
                                @endif
                                @if($orders->status >= 2)
                                    <button class="btn btn-warning pull-right" onclick="ProcTrack()"><i class="material-icons">add</i> Send To Finished WareHouse</button>
                                @endif
                            </div>
                        </div>
                        @include('/inc/process')
                    </div>
                </div>
                
            <!-- end of widgets -->
        </div>
    </section>
@endif
    <!-- Jquery Core Js -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ url('/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url('/js/admin.js') }}"></script>
    <script src="{{ url('/js/pages/tables/jquery-datatable.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ url('/js/demo.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#select').change(function() {
                var option = $('#select').val();
                if(option == 1){
                    document.getElementById('blank').style.display = 'block';
                } else if(option == 0){
                    document.getElementById('blank').style.display = 'none';
                    document.location.href = "{{ url('/view-inhouse') }}";
                } else {
                    document.getElementById('blank').style.display = 'none';
                }
            });
        });
        
        function UpsTake() {
            var x = document.getElementById('upstake');
            var y = document.getElementById('spraytake');
            if (x.style.display === 'none') {
                //document.getElementById('main-body').style.display = 'none';
                y.style.display = 'none';
                x.style.display = 'block';
            } else {
                //document.getElementById('main-body').style.display = 'block';
                x.style.display = 'none';
            }
        }

    function SprayTake() {
        var x = document.getElementById('spraytake');
        var y = document.getElementById('upstake');
        if (x.style.display === 'none') {
            //document.getElementById('main-body').style.display = 'none';
            y.style.display = 'none';
            x.style.display = 'block';
        } else {
            //document.getElementById('main-body').style.display = 'block';
            x.style.display = 'none';
        }
    }
    function ProcTrack() {
        var x = document.getElementById('proctrack');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
    </script>
</body>
</html>