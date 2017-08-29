
<!DOCTYPE html>
<html>
@include('inc/headview')
<body class="theme-blue">
    <div class="body" style="margin-top: 25px;">
        <div class="row clearfix col-lg-12">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>MAKE STOCK</h2>
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
                <div class="body">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/dashboard')}}">
                                <i class="material-icons">home</i> Home
                            </a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);">
                                <i class="material-icons">monetization_on</i> Sale Update
                            </a>
                        </li>
                    </ol>
                </div>
                <!-- Widgets -->
                <div class="row clearfix">
                        <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                            <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-col-default">
                                                    <div class="panel-heading bg-blue" role="tab" id="headingOne_19">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">Add Stock 
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                        <div class="panel-body">
                                                            <form method="POST" action="" target="">
                                                            {{ csrf_field() }}
                                                                 {{ method_field('PATCH') }}
                                                                     @include('inc.errors')
                                                                     @include('inc.success')
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Stock Name</label>
                                                                                <input type="text" class="form-control" name="stock_name" value="{{ $stock->stock_name }}" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Current Stock Quantity</label>
                                                                                <input type="text" class="form-control" class="value" id="value1" value="{{ $stock->remainder_goods }}" minlength="1" maxlength="4" disabled="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Quantity</label>
                                                                                <input type="number" class="form-control" class="value" id="value1" onkeyup="myFunction()" name="total_goods" placeholder="quantity" minlength="1" maxlength="4" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Rate</label>
                                                                                <input type="text" class="form-control" id="value2" class="value" onkeyup="myFunction()" name="rate" value="{{ $stock->rate }}" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Type</label>
                                                                                <input type="text" class="form-control" name="type" value="{{ $stock->type }}" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Size</label>
                                                                                <input type="text" class="form-control" name="size" value="{{ $stock->size }}" placeholder="size">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <label class="form-control">Amount</label>
                                                                                <input type="text" class="form-control" class="value" id="amount" onkeyup="myFunction()" name="amount" placeholder="Amount" value="{{ $stock->amount}}" disabled="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <button type="submit" class="btn btn-primary pull-right" >Add Record <i class="material-icons">local_atm</i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <center><a href="{{ url('/stock') }}"><button class="btn btn-warning center"><i class="material-icons">backspace</i> BACK</button></a></center> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- end of widgets -->
            </div>
        </div>
    </div>
    <script>
    function myFunction()
    {
     var value1 = parseInt(document.getElementById("value1").value);
     var value2 = parseInt(document.getElementById("value2").value);
        if(!value1==""&&!value2=="")
        {
         sum1 = value1 * value2;
         document.getElementById("amount").value = sum1;

        }
    }
    
    </script>
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