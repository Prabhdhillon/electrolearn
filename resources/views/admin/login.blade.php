<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
        content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description"
        content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="http://127.0.0.1:8000/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('assets/media/photos/photo12@2x.jpg');">
                <div class="row no-gutters justify-content-center bg-black-75">
                    <!-- Main Section -->
                    <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                        <div class="p-3 w-100">
                            <!-- Header -->
                            <div class="mb-3 text-center">
                                <a class="link-fx text-success font-w700 font-size-h1" href="index.html">
                                    <span class="text-dark">Dash</span><span class="text-success">mix</span>
                                </a>
                                <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign Up Form -->

                            <div class="row no-gutters justify-content-center">
                                <div class="col-sm-8 col-xl-6">
                                    <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-alt"
                                                    id="signup-username" name="signup-username" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email"
                                                    class="form-control form-control-lg form-control-alt"
                                                    id="signup-email" name="signup-email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password"
                                                    class="form-control form-control-lg form-control-alt"
                                                    id="signup-password" name="signup-password" placeholder="Password">
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-hero-lg btn-hero-success">
                                                <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                            </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                    <!-- END Main Section -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->


    <script src="assets/js/dashmix.core.min.js"></script>

    <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
    <script src="assets/js/dashmix.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_signup.min.js"></script>
</body>

</html>
