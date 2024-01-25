<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RUBICSOL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('website/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('website/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('website/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('website/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: OnePage - v4.7.0
    * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="bg-c-secondary">

@include('website.layouts.navbar')
@yield('content')
@include('website.layouts.footer')
<div id="preloader">
    <img src="RUBICSOL.gif" alt="">
</div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Vendor JS Files -->
<script src="{{url('website/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{url('website/assets/vendor/aos/aos.js')}}"></script>
<script src="{{url('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('website/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('website/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('website/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{url('website/assets/js/main.js')}}"></script>
@stack('scripts')
</body>

</html>
