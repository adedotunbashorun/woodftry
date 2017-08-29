
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
    <section class="content">  
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> HISTORY </h4>
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
                    <p>This page displays and keeps track of in-house production orders.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SKELETAL FORM 
                            </h2>
                        </div>
                        <div class="body">
                        {{ csrf_field() }}
                         @include('inc.errors')
                         @include('inc.success')
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="bg-blue">
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Client Name</th>
                                        <th>Carpenter Name</th>
                                        <th>Quantity</th>
                                        <th>Quantity Taken</th> 
                                        <th>Quantity Left</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Client Name</th>
                                        <th>Carpenter Name</th>
                                        <th>Quantity</th>
                                        <th>Quantity Finished</th> 
                                        <th>Quantity Left</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <input type="hidden" name="" value="{{ $counter=1 }} ">
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $order->product_key }}</td>
                                        <td>
                                            @foreach($clients as $client)
                                                @if($client->id == $order->client_id)
                                                    {{ $client->client_name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                             @foreach($carps as $carp)
                                                @if($carp->id == $order->carpenter_id)
                                                    {{ $carp->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->finished_quantity }}</td>
                                        <td>{{ $order->quantity - $order->finished_quantity }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SEMI FINISHED 
                            </h2>
                        </div>
                        <div class="body">
                        {{ csrf_field() }}
                         @include('inc.errors')
                         @include('inc.success')
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="bg-blue">
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Client Name</th>
                                        <th>Sprayer Name</th>
                                        <th>upholsterer Name</th>
                                        <th>Date Taken</th>
                                        <th>Date Completed</th> 
                                        <th>Quantity Taken</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Client Name</th>
                                        <th>Sprayer Name</th>
                                        <th>upholsterer Name</th>
                                        <th>Date Taken</th>
                                        <th>Date Completed</th> 
                                        <th>Quantity Taken</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <input type="hidden" name="" value="{{ $counter=1 }} ">
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div-->
            
            <!-- end of widgets -->
        </div>
    </section>
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