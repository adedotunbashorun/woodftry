
<!DOCTYPE html>
<html>
@include('inc/headview')
<body class="theme-blue">
    <!-- #END# Page Loader -->
    @include('inc/loader')
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
                        <h4><i class="fa fa-home"></i> HISTORY</h4>
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
                    <p>This page displays client requests history with the window to view every particular order's full details.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CLIENT'S REQUEST HISTORY
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="bg-blue">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Client Name</th>
                                        <th>Design Name</th>
                                        <th>Description</th>
                                        <th>Product Quantity</th>
                                        <th>Date Of Completion</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Client Name</th>
                                        <th>Design Name</th>
                                        <th>Description</th>
                                        <th>Product Quantity</th>
                                        <th>Date Of Completion</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <input type="hidden" name="" value="{{ $counter = 1 }}">
                                <tbody>
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
                                            @foreach($goods as $good)
                                                @if($good->design_ref == $order->design_ref)
                                                    {{ $good->design_name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $order->item_size }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td><a href="{{ url('/history') }}/{{ $order->id }}"><button class="btn btn-xs btn-primary pull-right" style="margin-bottom: 4px !important;">DETAILS <i class="material-icons">description</i></button></a></td>
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
    </section>
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