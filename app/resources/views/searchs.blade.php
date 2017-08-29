<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@if(isset( $title ))  {{$title}} @endif</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="/image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jquery//1.12.0/jquery.min.js">
    <link href="{{ url('/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
</head>
<body class="theme-blue">
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <section class="content">
        <div class="container-fluid">
            <div class="body">
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Search Result
                            </h2>
                        </div>
                        <div class="body">
                        {{ csrf_field() }}
                         @include('inc.errors')
                         <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search" name="search">
                        </div>
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable ">
                        <thead class="bg-blue">
                            <tr>
                               <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Departrment</th>
                                <th>Role / Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of widgets -->
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type:'get',
                url:'{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                    console.log(data);
                }
            });
        })
    </script>
</body>
</html>