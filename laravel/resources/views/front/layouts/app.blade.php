<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="edutim,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">
  
  <meta name="author" content="themeturn.com">

  <title>App Name - @yield('title')</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/bootstrap/bootstrap.css') }}">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/bicon/css/bicon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/themify/themify-icons.css') }}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/animate-css/animate.css') }}">
  <!-- WooCOmmerce CSS -->
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/woocommerce/woocommerce-layouts.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/woocommerce/woocommerce-small-screen.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/woocommerce/woocommerce.css') }}">
   <!-- Owl Carousel  CSS -->
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/owl/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front-assets/vendors/owl/assets/owl.theme.default.min.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href=" {{ asset('assets/front-assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/front-assets/css/responsive.css') }}">

</head>

<body id="top-header">

    @include('front.includes.header')    

    @yield('content')

    <footer>
      @include('front.includes.footer')      
    </footer>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="{{ asset('assets/front-assets/vendors/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.5 -->
    <script src="{{ asset('assets/front-assets/vendors/bootstrap/bootstrap.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/front-assets/vendors/counterup/waypoint.js') }}"></script>
    <script src="{{ asset('assets/front-assets/vendors/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front-assets/vendors/jquery.isotope.js') }}"></script>
    <script src="{{ asset('assets/front-assets/vendors/imagesloaded.js') }}"></script>
    <!--  Owlk Carousel-->
    <script src="{{ asset('assets/front-assets/vendors/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front-assets/js/script.js') }}"></script>

  </body>
  </html>