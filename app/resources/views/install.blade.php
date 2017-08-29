
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="/image/x-icon">
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ url('/iconfont/material-icons.css') }}">
    <link href="{{ url('/css/roboto.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{ url('/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ url('/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url('/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ url('/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ url('/plugins/waitme/waitMe.css') }}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{ url('/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>
<body class="theme-blue">

    <div class="body" style="margin-top: 25px;">
        <div class="row clearfix col-lg-12">
            <div class="container-fluid">
                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2>
                                    SETTING UP
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    ADMIN DETAILS
                                                </h2>
                                            </div>
                                            <div class="body">
                                                <div class="row">
                                                    <form method="POST" action="" target="" enctype="multipart/form-data">
                                                      {{ csrf_field() }}
                                                       @include('inc.errors')
                                                       @include('inc.success')
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                      <b>Name</b>
                                                                        <input type="text" class="form-control" name="name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                      <b>Phone Number</b>
                                                                        <input type="tel" class="form-control" name="phone" minlength="11" maxlength="21" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                      <b>Email</b>
                                                                        <input type="email" class="form-control" name="email" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                      <b>Image</b>
                                                                        <input type="file" class="form-control" name="photo" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                      <b>Password</b>
                                                                        <input type="password" class="form-control" name="password" minlength="6" maxlength="15" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                      <b>Confirm Password</b>
                                                                        <input type="password" class="form-control" name="password_confirmation" minlength="6" maxlength="15" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    SITE SETTINGS
                                                </h2>
                                            </div>
                                            <div class="body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                                        <div class="thumbnail">
                                                            <div class="caption">
                                                              <div class="row clearfix">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                                                      <div class="form-group form-float">
                                                                          <div class="form-line">
                                                                            <b>Site Title</b>
                                                                              <input type="text" class="form-control" name="siteTitle" required>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                                                      <div class="form-group form-float">
                                                                          <div class="form-line">
                                                                            <b>Site Email</b>
                                                                              <input type="email" class="form-control" name="systemEmail" minlength="11" maxlength="21" required>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <!--div class="col-lg-12 col-md-12 col-sm-12">
                                                                      <div class="form-group form-float">
                                                                          <div class="form-line">
                                                                            <b>License Key</b>
                                                                              <input type="text" class="form-control" name="license" required>
                                                                          </div>
                                                                      </div>
                                                                  </div-->
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right" >save <i class="material-icons">save</i></button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of widgets -->
            </div>
        </div>
    </div>
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ url('/plugins/chartjs/Chart.bundle.js') }}"></script>
    <!-- Autosize Plugin Js -->
    <script src="{{ url('/plugins/autosize/autosize.js') }}"></script>
   

    <!-- Custom Js -->
    <script src="{{ url('/js/admin.js') }}"></script>
    <script src="{{ url('/js/pages/forms/basic-form-elements.js') }}"></script>
</body>
</html>