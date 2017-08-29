@include('inc/headadd')
<body class="theme-blue">
    @include('inc.nav')
    @include('inc.sidebar')
    @yield('content')
      </div>
    </div>
    
    @yield('footer')
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/script-load.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('/plugins/chartjs/Chart.bundle.js') }}"></script>
    <script src="{{ url('/plugins/autosize/autosize.js') }}"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->

    <!-- Custom Js -->
    <script src="{{ url('/js/admin.js') }}"></script>

    <!-- Demo Js -->
    
</body>
</html>
