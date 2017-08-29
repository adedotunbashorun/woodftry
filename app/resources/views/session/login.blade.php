<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Admin | Sign In</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Bootstrap Core Css -->
        <link href="{{ url('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('/plugins/node-waves/waves.css') }}" rel="stylesheet" />
        <link href="{{ url('/plugins/animate-css/animate.css') }}" rel="stylesheet" />
        <link href="{{ url('/css/style.css') }}" rel="stylesheet">
        <style>
            body {
                margin:0px;
                background: url('{{ url('/images/background.jpg') }}');
                background-attachment:fixed;
                background-repeat:no-repeat;
                color:white;
            }
            
            section {
                padding: 100px;
            }
            
            .landing-page {
                background-color:azure;
                color:black;
                padding:30px;
                opacity:0.5;
                border:3px solid DEEPPINK;
            }
            
            .landing-page img:hover {
                opacity: 0.8;
                cursor: move;
            }
        </style>
    </head>
<body background="">
<center>
    <h1 style="color:skyeblue;font-size:150px;">Please Contact Developers</h1>
    <label style="font-size: 50px;">Please Call: 07060551088</label> 
</center>

    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="landing-page">
                        <h2>THE WOOD FACTORY LIMITED</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('/images/pic1.jpg') }}" class="thumbnail img-responsive" />
                            </div>
                            <div class="col-md-6">
                                <img src="{{ url('/images/pic2.jpg') }}" class="thumbnail img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="login-box">
                        <div class="card">
                            <div class="body">
                                <form id="sign_in" method="POST">
                                 {{ csrf_field() }}
                                     @include('inc.errors')
                                     @include('inc.success')
                                    <div class="msg">
                                        <center>
                                            <h3>WELCOME ADMIN</h3>
                                            Sign in to start your session<hr>
                                        </center>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="email" placeholder="Username" required autofocus>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8 p-t-5">
                                            <label>
                                                <input type="checkbox" name="remember" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                        <div class="col-xs-4">
                                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                                        </div>
                                    </div><hr>
                                    <div class="row m-t-15 m-b--20">
                                        <div class="col-xs-6 pull-right">
                                            <a href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center><p><strong>&copy;2017 The Woodwork Factory. All Rights Reserved.</strong></p></center>
        </div>
    </section> -->
</body>
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ url('/plugins/node-waves/waves.js') }}"></script>
    <script src="{{ url('/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ url('/js/admin.js') }}"></script>
    <script src="{{ url('/js/pages/examples/sign-in.js') }}"></script>
</html>