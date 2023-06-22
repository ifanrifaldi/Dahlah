<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{url('public/admin')}}/assets/images/politap.png">

    <link href="{{url('public/admin')}}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="{{url('public/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="{{url('public/admin')}}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="{{url('public/admin')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/admin')}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{url('public/admin')}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="{{url('public/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
       @include('admin.layout.header')
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
       
        <!-- Left Sidebar End -->
        @include('admin.layout.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.utils.notif')
                        </div>
                    </div>
                    <!-- end page-title -->

                    

                </div>
                <!-- container-fluid -->
                @yield('content')
            </div>
            <!-- content -->

          @include('admin.layout.footer')

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <script src="{{url('public/admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('public/admin')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public/admin')}}/assets/js/metismenu.min.js"></script>
    <script src="{{url('public/admin')}}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{url('public/admin')}}/assets/js/waves.min.js"></script>

    <script src="{{url('public/admin')}}/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!--Morris Chart-->
    <script src="{{url('public/admin')}}/plugins/morris/morris.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/raphael/raphael.min.js"></script>

    <script src="{{url('public/admin')}}/assets/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{url('public/admin')}}/assets/js/app.js"></script>


    <!-- Required datatable js -->
    <script src="{{url('public/admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{url('public/admin')}}/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/jszip.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{url('public/admin')}}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="{{url('public/admin')}}/assets/pages/datatables.init.js"></script>
</body>

</html>