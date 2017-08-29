@include('inc/head')

<body class="theme-blue">
@include('inc/loader')
    @include('inc.nav')
    @include('inc.sidebar')
      @yield('content')
     


      
      </div>
    </div>
    
   
    @yield('footer')
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
    <script src="{{ url('/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ url('/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('/plugins/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ url('/plugins/autosize/autosize.js') }}"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ url('/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url('/js/admin.js') }}"></script>
    <script src="{{ url('/js/pages/forms/basic-form-elements.js') }}"></script>

    <script src="{{ url('/js/pages/charts/chartjs.js') }}"></script>
    <script src="{{ url('/js/pages/charts/flot.js') }}"></script>
    <!-- Demo Js -->
    <script src="{{ url('/js/demo.js') }}"></script>
    <!-- Flot Chart Plugins Js -->
    
</body>
</html>