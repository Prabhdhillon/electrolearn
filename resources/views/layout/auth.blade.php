<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/3257729e16.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <title>@yield('title','Electrolearn')</title>
</head>

<body>
    <div class="section1">
        <div class="container">
            <div>
                <nav class="navbar navbar-expand-lg navbar-final">
                    <div class="container-fluid">
                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                            data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars hamburger-icon"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="toggleMobileMenu">

                            <a class="navbar-brand" href="/"> <img class="me-1" src="{{ asset('images/logo.png') }}"
                                    width="25" height="25">ElectroLearn</a>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link me-5" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5 " href="/instructors">Instructors</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5 " href="/about">About Us</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5" href="/catalogue">Courses</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5" href="/signout"><button type="button"
                                                class="btn btn-sm btn-secondary nav-btn">Sign Out</button></a>
                                    </li>
                                @else

                                    <li class="nav-item">
                                        <a class="nav-link me-5" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5 " href="/instructors">Instructor</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5 " href="/about">About Us</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link me-5" href="/catalogue">Courses</a>
                                    </li>
                                    <li class="nav-item ml-3">
                                        <a class="nav-link" href="/register"><button type="button"
                                                class="btn btn-sm btn-secondary nav-btn">Get Started</button></a>
                                    </li>
                                @endauth
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>



        @yield("content")
        <!--FOOTER starts-->
        <div class="footer">
            <div class="footer-wave">
            </div>
            <div class="footer-box">
                <div class="footer-content container">
                    <ul class="footer-list">
                        <li class="footer-logo me-5">
                            <a class="footer-brand" href="/"> <img class="me-1" src="{{ asset('images/logo.png') }}"
                                    width="25" height="25">ElectroLearn</a>
                        </li>
                        <li class="footer-list-item me-3">
                            <a class="footer-link">TERMS OF USE</a>
                        </li>
                        <li class="footer-list-item me-3">
                            <a class="footer-link">PRIVACY POLICY</a>
                        </li>
                        <li class="footer-list-item me-3">
                            <a href="/about" class="footer-link">ABOUT US</a>
                        </li>
                        <li class="footer-list-item me-3">
                            <a class="footer-link">DONATE</a>
                        </li>
                        <li class="footer-list-item me-3">
                            <a class="footer-link">ISSUES</a>
                        </li>
                        <li class="footer-list-item me-3">
                            <a class="footer-link">SUBSCRIPTION</a>
                        </li>
                    </ul>
                    <p class="footer-copyright ms-4"> COPYRIGHT AND ALL RIGHTS RESERVED</p>
                </div>
            </div>
        </div>

        <!--FOOTER ends-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 200,
                duration: 800,
            });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
        <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
