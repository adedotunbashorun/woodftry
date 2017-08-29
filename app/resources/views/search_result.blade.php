{{ $title = "Search Result" }}
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
                        <h4><i class="fa fa-home"></i> SEARCH RESULT</h4>
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
                    <p>This page displays / generate report from the search result.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        {{ csrf_field() }}
                         @include('inc.errors')
                         @include('inc.success')
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable ">
                                <thead class="bg-blue">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product Key</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <input type="hidden" name="" value="{{ $counter=1 }} ">
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $order->product_key }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>@if($order->status < 4) <button class="btn btn-danger btn-xs disabled">NOT COMPLETED</button>  @else <button class="btn btn-success disabled">COMPLETED</button>  @endif
                                        </td>
                                        <td>@if($order->status < 4)
                                            <a href="{{ url('/show_order') }}/{{ $order->id }}&&{{ $order->client_id }}&&{{ $order->user_id }}&&{{ $order->carpenter_id}}&&{{ $order->sprayer_id }}&&{{ $order->upholstery_id}}"><button class="btn btn-primary">DETAILS</button>  </a>
                                            @else
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <p><a href="{{ url('/search') }}"><button class="btn btn-warning">Return Back To Search Page</button>  </a></p>
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