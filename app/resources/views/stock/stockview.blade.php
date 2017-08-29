{{ $title = "View All Inhouse Stock" }}
@include('inc/headview')
<body class="theme-blue">
    @include('inc/loader')
    <div class="overlay"></div>
   @include('inc/nav')
    @include('inc/sidebar')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> FINISHED PRODUCTION / WAREHOUSE</h4>
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
                <div class="col-lg-12">
                    @include('inc.errors')
                    @include('inc.success')
                </div>
            </div><hr>
            <div class="card">
                <div class="header">
                    <p>This page displays a detailed overview of all the goods in warehouse, their description, total number of goods, sold goods, and the total remainder.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr >
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <!--th>Type</th>
                                        <th>Design Name</th-->
                                        <th>Description</th>
                                        <th>Total Goods</th>
                                        <th>Delivered Goods</th>
                                        <th>Remaining Goods</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <input type="hidden" name="" value="{{ $counter = 1 }}">
                                <tbody>
                                @foreach($stock as $stock)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $stock->stock_name}}</a></td>
                                        <td>
                                            @include('inc/item')
                                        </td>
                                        <td>{{ $stock->total_goods }}</td>
                                        <td>{{ $stock->sold_goods }}</td>
                                        <td>{{ $stock->total_goods - $stock->sold_goods }}</td>
                                        <td>
                                            @foreach($orders as $order)
                                                @if($order->product_key == $stock->stock_name)
                                                    {{ $order->created_at }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($orders as $order)
                                                @if($order->product_key == $stock->stock_name)
                                                    {{ $order->updated_at }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ url('/sale') }}/{{ $stock->id }}"><button class="btn btn-success btn-xs pull-right"><i class="material-icons">local_shipping</i> Make Delivery</button></a>
                                        </td>
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
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
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
    <script type="text/javascript">
        function AddStock() {
            var x = document.getElementById('addStock');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
    </script>
</body>
</html>