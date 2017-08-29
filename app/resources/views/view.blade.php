
<!DOCTYPE html>
<html>
@include('inc/headview')
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
                        <h4><i class="fa fa-home"></i> STAFFS REPORT (CARPENTER)</h4>
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
                    <p>This page displays all the jobs done or are currently being worked on by the carpenter in question, with records of the jobs link with the various other departments (spray/upholstery)</p>
                    <p><a href="{{ url('/view-carpenter')}}"><button class="btn btn-warning"> <i class="material-icons">arrow_back</i> Back to Workers</button></a></p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Department: </strong>&nbsp; {{ $all->department }}
                                <strong>Name: </strong>&nbsp; {{ $all->name}}
                            </h2>
                        </div>
                        <div class="body">
                        {{ csrf_field() }}
                         @include('inc.errors')
                         @include('inc.success')
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="bg-blue">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product_Key</th>
                                        <th>Carpenter JobDone</th>
                                        <th>Upholstery JobDone</th>
                                        <th>Sprayer JobDone</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product_Key</th>
                                        <th>Carpenter JobDone</th>
                                        <th>Upholstery JobDone</th>
                                        <th>Sprayer JobDone</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <input type="hidden" name="" value="{{ $counter=1 }}">
                                @foreach($carps as $carp)
                                    <tr>
                                        <td>{!! $counter++ !!}</td>
                                        <td>{{ $carp->product_key }}</td>
                                        <td>{{ $carp->finished_quantity }}</td>
                                        <td>{{ $carp->upholstery_quantity }}</td>
                                        <td>{{ $carp->sprayer_quantity }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of widgets -->
        </div>

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
</body>
</html>