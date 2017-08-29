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
                        <h4><i class="fa fa-home"></i> PROCESS SEMI-FINISHED ORDER (LAMINATE)</h4>
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
                </div><hr>
                <div class="col-lg-12">
                    @include('inc.errors')
                    @include('inc.success')
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <p>This page allows you to process and track in-house orders of laminate material type.</p>
                    <p><a href="{{ url('/view-inhouse-laminate') }}"><button class="btn btn-warning">Return To Previous Page <i class="material-icons">arrow_back</i></button></a></p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        @if($orders->status == 0)
                        <div class="body">
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
                                        <label for="password_2">Laminate Name</label>
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
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Quantity" value="{{ $orders->quantity }}" name="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Is Job Completed ?</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="quantity" id="select">
                                                    @if($orders->status == 0)
                                                    <option value="">- - select status - -    </option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                    @else
                                                    
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix row" id="blank" style="display: none;">
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <input type="hidden" value="{{ $orders->quantity - $orders->finished_quantity }}" name="finished" >
                                        <button name="add" type="submit" class="btn btn-warning"><i class="material-icons">add_circle</i> Confirm Completion</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @else
                            <div class="header"><h2>Please Confirm Process Completion</h2></div>
                            <div class="body">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                    <thead class="bg-blue">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Product Key</th>
                                            <th>Sales Rep Name</th>
                                            <th>Quantity</th>
                                            <th>Goods in Stock</th>
                                            <th>Completed Production</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <input type="hidden" name="" value="{{ $counter=1 }}">
                                    <tbody>
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $orders->product_key}}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $orders->finished_quantity }}</td>
                                            <td>{{ $orders->total }}</td>
                                            <td>
                                                 <form action="" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('PATCH') }}
                                                <input type="text" value="{{ $orders->finished_quantity }}" class="form-control" name="completed" required>
                                            </td>
                                            <td>
                                                <input type="hidden" name="name_id" value="{{ $orders->id }}">
                                                <button type="submit" class="btn btn-sm btn-primary pull-right " onclick="return confirm('Are you sure this goods are ready to be taken to the where house?')">Confirmed </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                <!--div class="row clearfix" style="margin-bottom: 30px !important;">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button class="btn btn-primary" onclick="ProcTrack()" style="margin-left: 15px;"><i class="material-icons">history</i> PROCESS</button>
                    </div>
                </div>

                <div class="row clearfix" id="proctrack" style="display: none;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            
                        </div>
                    </div>
                </div-->
            </div>
            
            <!-- end of widgets -->
        </div>
    </section>
@endif

    <!-- Jquery Core Js -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ url('/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
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
                    document.location.href = "{{ url('/view-inhouse-laminate') }}";
                } else {
                    document.getElementById('blank').style.display = 'none';
                }
            });
        });
        
        function UpsTake() {
        var x = document.getElementById('upstake');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
    function SprayTake() {
        var x = document.getElementById('spraytake');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
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