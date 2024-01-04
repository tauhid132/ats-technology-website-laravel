<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('theme/vendor/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/vendor/tiny-slider/tiny-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/vendor/glightbox/css/glightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/vendor/choices/css/choices.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/vendor/flatpickr/css/flatpickr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
  <style>
    .topnav-container{
      justify-content: center
    }
    @media (min-width:500px) {
      .topnav-container { 
        justify-content: space-between
      }
      
    }
  </style>
</head>

@yield('custom-stylesheet')
<body>
  @include('frontend.includes.header')
  @yield('main-body')
  @include('footer')
</body>
<script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('theme/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('theme/vendor/glightbox/js/glightbox.js') }}"></script>
<script src="{{ asset('theme/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('theme/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('theme/js/functions.js') }}"></script>
</html>