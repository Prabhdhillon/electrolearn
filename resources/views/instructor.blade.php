<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3257729e16.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ElectroLearn</title>
  </head>
  <body>

  <!--NAVBAR starts-->

  <div class="section1">
  <div class="container">
   <div>
   <nav class="navbar navbar-expand-lg navbar-final">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
      <a class="navbar-brand" href="#"> <img class="me-1" src="{{ asset('css/logo.png') }}" width="25" height="25">ElectroLearn</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-5" aria-current="page" href="#">Browse</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link me-5 " href="#">Disciplines</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link me-5" href="#">Certificates</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="#"><button type="button" class="btn btn-sm btn-secondary nav-btn">Get Started</button></a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
</div>
</div>

  <!--NAVBAR ends -->


  <!--INSTRUCTOR starts-->
  <div class="instructor container">
<img src="{{ asset('css/person2.png') }}" class="instructor-img">
<h1 class="instructor-title heading mt-4">Michael Grezniek</h1>
<p class="instructor-discription mt-4">Lorem ipsum dolor sit amet, 
  consectetur adipiscing elit. Integer vulputate sed sapien sed sollicitudin.
   Sed aliquet est sapien, non aliquam arcu finibus vel. Vestibulum eu tincidunt eros. 
   Praesent ullamcorper ipsum nisi. Sed vel imperdiet diam, et pretium justo. Donec viverra,
    orci nec venenatis consequat, 
  nibh urna pharetra mauris, a mattis erat eros vitae orci. Vivamus in consectetur lorem.</p>
  </div>
  <!--INSTRUCTOR ends-->

<!--VIDEOS start-->
<div class="video container">
<div class="row video-row mx-auto">
 
  <div class="col"><img src="{{ asset('css/video.png') }}" class="video-img"></div>
  <div class="col">
    <h6 class="video-title">Streaming for Bignners</h6>
    <h6 class="video-instructor">By Micheal G.</h6>
    <h6 class="video-time">1hr20min</h6>
    <p class="video-discription">Lorem ipsum dolor sit amet, 
  consectetur adipiscing elit. Integer vulputate sed sapien sed sollicitudin.
   non aliquam arcu finibus vel.</p>
   <button class="video-btn btn">BIGNNER</button>

  </div>
</div>
<div class="row video-row mx-auto">
 
  <div class="col"><img src="{{ asset('css/video.png') }}" class="video-img"></div>
  <div class="col">
    <h6 class="video-title">Streaming for Bignners</h6>
    <h6 class="video-instructor">By Micheal G.</h6>
    <h6 class="video-time">1hr20min</h6>
    <p class="video-discription">Lorem ipsum dolor sit amet, 
  consectetur adipiscing elit. Integer vulputate sed sapien sed sollicitudin.
   non aliquam arcu finibus vel.</p>
   <button class="video-btn btn">BIGNNER</button>

  </div>
</div>
</div>
<!--VIDEOS ends-->

<div class="buttons container">

<p class="buttons-para ">Showing 10 courses from 132 courses</p>
<button class="button-prev btn me-4">Previous</button>
<button class="button-next btn">Next</button>
</div>

<!--FOOTER starts-->

<div class="footer">
<div class="footer-wave">
  
</div>
<div class="footer-box">
<div class="footer-content container">
<ul class="footer-list">
<li class="footer-logo me-5" >
<a class="footer-brand" href="#"> <img class="me-1" src="{{ asset('css/logo.png') }}" width="25" height="25">ElectroLearn</a>
</li>
<li class="footer-list-item me-3">
<a >TERMS OF USE</a>
</li>
<li class="footer-list-item me-3">
<a >PRIVACY POLICY</a>
</li>
<li class="footer-list-item me-3">
<a >ABOUT US</a>
</li>
<li class="footer-list-item me-3">
<a >DONATE</a>
</li>
<li class="footer-list-item me-3">
<a >ISSUES</a>
</li>
<li class="footer-list-item me-3">
<a >SUBSCRIPTION</a>
</li>
</ul>
<p class="footer-copyright ms-4">  COPYRIGHT AND ALL RIGHTS RESERVED SINCE 2018</p>
</div>
</div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>