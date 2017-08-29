
@include('inc/headview')
<body class="theme-blue">
    @include('inc/loader')
    <div class="overlay"></div>
    @include('inc/nav')
    @include('inc/sidebar')
@if(auth()->user()->access_level == '1' || auth()->user()->access_level == '2')
    <section class="content">
        <div class="container-fluid">
             <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i>CLIENT PRODUCTION PROCESS</h4>
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
                    <p>This page displays client orders that are of wood material and do require the expertise of the carpenter, sprayer or upholsterer.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h5>PRODUCTION ORDER DETAILS </h5>
                        </div>
                        <div class="body">
                            <div class="body">
                                <form class="form-horizontal" method="POST" action="" target="">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Order By</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="username" value="{{ $users->name }}" name="username" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Product Key</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="email_address_2" class="form-control" placeholder="Product key" value="{{ $orders->product_key }}" name="product_key" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Client Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $clients->client_name }}" name="client_name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Carpenter Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $carps->name }}" name="Carpenter" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Sprayer Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $sprays->name }}" name="client_name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Upholstery Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $ups->name }}" name="client_name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Quantity</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="email_address_2" class="form-control" placeholder="Quantity" value="{{ $orders->quantity }}" name="quantity" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(auth()->user()->access_level == '1' || auth()->user()->access_level == '2')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue"><h5>PRODUCTION ORDER PROGRESS</h5></div>
                        <div class="body">
                            @include('inc/success')
                                <div class="row">
                                @if($orders->status == 0)
                                    <div class="col-md-10">
                                        <div class="progress">
                                            <div class="progress-bar bg-red progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">0% complete</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="{{ url('/show_order') }}/{{ $orders->id }}&&{{ $orders->client_id }}&&{{ $orders->user_id }}&&{{ $orders->carpenter_id}}&&{{ $orders->sprayer_id }}&&{{ $orders->upholstery_id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            @include('inc/form')
                                            <button class="btn btn-sm btn-primary pull-right" onclick="return confirm('Are you sure this stage has been completed?')">Complete</button>
                                        </form>
                                    </div>
                                @elseif($orders->status == 1 || $orders->status == 2 || $orders->status == 3 || $orders->status == 4)
                               <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-green progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Carpentry Works 100% complete</div>
                                    </div>
                                </div>
                                @endif
                                @if($orders->status == 1)
                                    <div class="col-md-10">
                                        <div class="progress">
                                            <div class="progress-bar bg-red progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50% complete</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="{{ url('/show_order') }}/{{ $orders->id }}&&{{ $orders->client_id }}&&{{ $orders->user_id }}&&{{ $orders->carpenter_id}}&&{{ $orders->sprayer_id }}&&{{ $orders->upholstery_id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            @include('inc/form')
                                            <button class="btn btn-sm btn-primary pull-right" onclick="return confirm('Are you sure this stage has been completed?')">Complete</button>
                                        </form>
                                    </div>
                                @elseif($orders->status == 2 || $orders->status == 3 || $orders->status == 4)
                               <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-green progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Upholstery Works 100% complete</div>
                                    </div>
                                </div>
                                @endif  
                                @if($orders->status == 2)
                                    <div class="col-md-10">
                                        <div class="progress">
                                            <div class="progress-bar bg-red progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50% complete</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="{{ url('/show_order') }}/{{ $orders->id }}&&{{ $orders->client_id }}&&{{ $orders->user_id }}&&{{ $orders->carpenter_id}}&&{{ $orders->sprayer_id }}&&{{ $orders->upholstery_id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            <button class="btn btn-sm btn-primary pull-right" onclick="return confirm('Are you sure this stage has been completed and delivered?')">Complete</button>
                                            
                                    </div>
                                        @include('inc/form')
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Remark" value="" name="remarks" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                @elseif($orders->status == 3 || $orders->status == 4)
                               <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-green progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Sprayer Works And Production 100% Complete But Not Delivered</div>
                                    </div>
                                </div>
                                @endif   
                                @if($orders->status == 3 )
                                    <div class="col-md-10">
                                        <div class="progress">
                                            <div class="progress-bar bg-red progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50% complete </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="{{ url('/show_order') }}/{{ $orders->id }}&&{{ $orders->client_id }}&&{{ $orders->user_id }}&&{{ $orders->carpenter_id}}&&{{ $orders->sprayer_id }}&&{{ $orders->upholstery_id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <button class="btn btn-sm btn-primary pull-right" onclick="return confirm('Are you sure payment has been completed and goods ready to be delivered?')">Complete</button>
                                    </div>
                                        @include('inc/form')
                                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <label>Job Status</label>
                                                <select class="form-control" required>
                                                    <option value="">-- select job status --</option>
                                                    <option value="{{ $orders->status + 1 }}">Job Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                @elseif($orders->status == 4)
                               <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-green progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 100%">Job 100% Complete And Goods Delivered
                                        </div>
                                    </div>
                                </div>
                                @endif   
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- end of widgets -->
        </div>
    </section>
@elseif(auth()->user()->access_level == '3')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> LAMINATE PRODUCTIONS OVERVIEW</h4>
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
                    <p>This page displays the inhouse productions that are of laminate material only and do not require the expertise of the carpenter, sprayer or upholsterer. To add new laminate production click the button below.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h5>PRODUCTION ORDER DETAILS </h5>
                        </div>
                        <div class="body">
                            <div class="body">
                                <form class="form-horizontal" method="POST" action="" target="">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Order By</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="username" value="{{ $users->name }}" name="username" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Product Key</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="email_address_2" class="form-control" placeholder="Product key" value="{{ $orders->product_key }}" name="product_key" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Client Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $clients->client_name }}" name="client_name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Quantity</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="email_address_2" class="form-control" placeholder="Quantity" value="{{ $orders->quantity }}" name="quantity" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- end of widgets -->
        </div>
    </section>
@else
     <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="margin-top: -10px;">
                    <div class="pull-left" style="color:#16a085;">
                        <h4><i class="fa fa-home"></i> LAMINATE PRODUCTIONS OVERVIEW</h4>
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
                    <p>This page displays the inhouse productions that are of laminate material only and do not require the expertise of the carpenter, sprayer or upholsterer. To add new laminate production click the button below.</p>
                </div>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h5>
                                PRODUCTION ORDER DETAILS 
                            </h5>
                        </div>
                        <div class="body">
                            <div class="body">
                                <form class="form-horizontal" method="POST" action="" target="">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Order By</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="username" value="{{ $users->name }}" name="username" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Product Key</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="email_address_2" class="form-control" placeholder="Product key" value="{{ $orders->product_key }}" name="product_key" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Client Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="password_2" class="form-control" placeholder="Client Name" value="{{ $clients->client_name }}" name="client_name" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Quantity</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="email_address_2" class="form-control" placeholder="Quantity" value="{{ $orders->quantity }}" name="quantity" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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