<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/favicon.ico">

    <link href="{{url('public')}}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public')}}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="accountbg"></div>

    <!-- Begin page -->
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="mdi mdi-home h1"></i></a>
    </div>

    <div class="wrapper-page">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages shadow-none mt-4">
                        <div class="card-body">
                            <div class="text-center mt-0 mb-3">
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{url('public')}}/assets/images/logo-dark.png" class="mt-3" alt="" height="26"></a>
                                <p class="text-muted w-75 mx-auto mb-4 mt-4">Enter your email address and password to access admin panel.</p>
                            </div>

                            <form action="{{ url('login') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="username">Email</label>
                                        <input class="form-control" type="email" required="" id="email" placeholder="email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" id="password" placeholder="Password" required>
                                    </div>
                                </div>

                               

                                <div class="form-group text-center mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>


                             

                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    <!-- jQuery  -->
    <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public')}}/assets/js/metismenu.min.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{url('public')}}/assets/js/waves.min.js"></script>

    <script src="{{url('public')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- App js -->
    <script src="{{url('public')}}/assets/js/app.js"></script>

</body>

</html>