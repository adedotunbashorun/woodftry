
<!DOCTYPE html>
<html>
@include('inc/headview')
<body class="theme-blue">
    <!-- Page Loader -->
    @include('inc/loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    @include('inc/nav')
    <!-- #Top Bar -->
    @include('inc/sidebar')
    <section class="content">
        <div class="container-fluid">
             @include('inc/blockhead')
            <div class="body">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/dashboard') }}">
                            <i class="material-icons">home</i> Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);">
                            <i class="material-icons">done</i> View Jobs Done By Workers
                        </a>
                    </li>
                </ol>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                COMPLETED JOBS TRACK 
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="bg-blue">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Jobs Done</th> 
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Jobs Done</th> 
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                <input type="hidden" name="" value="{{ $counter=1 }} ">
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
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

    <!-- Bootstrap Core Js -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url('/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
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