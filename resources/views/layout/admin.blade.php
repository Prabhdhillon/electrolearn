<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="description" content="Electrolearn Admin Panel for instructors">
    <meta name="author" content="electrobyte">
    <meta name="robots" content="noindex, nofollow">

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('css/dashmix.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('css/admin.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        <x-admin.sidebar></x-admin.sidebar>

        <x-admin.navbar></x-admin.navbar>

        <!-- Main Container -->
        <main id="main-container">
            @yield("content")
        </main>
        <!-- END Main Container -->

        <x-admin.footer />
    </div>
    <!-- END Page Container -->

    <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out /_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the /js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            /js/core/jquery.min.js
            /js/core/bootstrap.bundle.min.js
            /js/core/simplebar.min.js
            /js/core/jquery-scrollLock.min.js
            /js/core/jquery.appear.min.js
            /js/core/js.cookie.min.js
        -->
    <script src="{{ asset('js/dashmix.core.min.js') }}"></script>

    <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at /_js/main/app.js
        -->
    <script src="{{ asset('js/dashmix.app.min.js') }}"></script>
</body>

</html>
