
@include('inc/headview')
<body class="theme-blue">
    <div class="body" style="margin-top: 25px;padding:50px;">
        <div class="row clearfix col-lg-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                        <div class="pull-left" style="color:#16a085;">
                            <h4><i class="fa fa-home"></i> MAKE A DELIVERY</h4>
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
                        <p>This page allows you make a delivery after specifying the client to whom the products are to be delivered to and the quantity as well from the finished goods in the warehouse.</p>
                    </div>
                </div>
                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">  
                                <form method="POST" action="" target="">
                                {{ csrf_field() }}
                                     {{ method_field('PATCH') }}
                                         @include('inc.errors')
                                         @include('inc.success')
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <label>Client Name</label>
                                                <select class="form-control show-tick" name="customer_name" required>
                                                        <option value=""> - - select - - </option>
                                                        @foreach($orders as $order)
                                                            <option value="{{ $order->id }}">{{ $order->client_name }}</option>
                                                        @endforeach
                                                    </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-control">Stock Name</label>
                                                    <input type="text" class="form-control" name="stock_name" value="{{ $stock->stock_name }}" placeholder="Stock Name" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-control">Goods Remaining</label>
                                                    <input type="text" class="form-control" name="rate" placeholder="Rate" value="{{ $stock->total_goods - $stock->sold_goods}}" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-control">Design Name</label>
                                                    <input type="text" class="form-control" name="design_name" placeholder="" value="{{ $good->design_name }}" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-control">Description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="" value="@include('inc/item')" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label class="form-control">Quantity</label>
                                                    @if($stock->total_goods == $stock->sold_goods)
                                                        <label class="form-control">Stock empty</label>
                                                    @else
                                                    <input type="number" class="form-control" name="quantity" placeholder="Quantity Sold" minlength="1" maxlength="4" required>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $stock->id }}" name="stock_id">
                                        <input type="hidden" value="{{ $stock->total_goods - $stock->sold_goods }}" name="total_goods">
                                         @if($stock->total_goods == $stock->sold_goods)
                                         <center><a href="{{ url('/stock') }}"><button type="button" class="btn btn-warning center"><i class="material-icons">backspace</i> Return Back</button></a></center>
                                         @else
                                        <center><button type="submit" class="btn btn-success">Make Delivery <i class="material-icons">local_shipping</i></button> <a href="{{ url('/stock') }}"><button type="button" class="btn btn-warning center"><i class="material-icons">backspace</i> Return Back</button></a></center>
                                        @endif
                                    </div>
                                </form>
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
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
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
    <script src="{{ url('/js/pages/ui/dialogs.js') }}"></script>
    <!-- Demo Js -->
    <script src="{{ url('/js/demo.js') }}"></script>
</body>
</html>