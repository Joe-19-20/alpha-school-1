<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--<title>Educenter</title>-->
  <title>@yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css') }}">

  <!-- Main Stylesheet -->
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ asset('//fonts.gstatic.com') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito') }}"rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <!-- <div class="preloader">
    <img src="../images/preloader.gif" alt="preloader">
  </div> -->
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  @include('layouts.auth_app')
  @include('layouts.includes.navbar')
</header>

@yield('content')
@include('layouts.includes.footer')


<!-- jQuery -->
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- aos -->
<script src="{{ asset('plugins/aos/aos.js') }}"></script>
<!-- venobox popup -->
<script src="{{ asset('plugins/venobox/venobox.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

 <!-- Scripts -->
 <script src="{{ asset('js/script.js') }}" defer></script>
 <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>