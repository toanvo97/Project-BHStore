@extends('client.master.master')

@section('title','Trang chủ')

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Set logo tab -->
  <link rel="icon" type="image/png" href="{{ asset('client/assets/img/logo-bh-1.png')}}"/>

  <link href="{{ asset('client/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('client/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{ asset('client/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('client/assets/css/custom.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('client/assets/vendor/fancybox/dist/jquery.fancybox.min.css')}}">

  <!-- Hide the wrapper element when first page loading -->
  <style>
    .hidden{
      display: none;
    }
  </style>
@endsection

@section('header')
    @include('client.layout.header')
@endsection

@section('about')
    @include('client.page.about')
@endsection

@section('counts')
    @include('client.page.counts')
@endsection

@section('cta')
    @include('client.page.cta')
@endsection

@section('nervous')
    @include('client.page.nervous')
@endsection

@section('promise')
    @include('client.page.promise')
@endsection

@section('reason')
    @include('client.page.reason')
@endsection

@section('services')
    @include('client.page.services')
@endsection

@section('about')
    @include('client.page.portfolio')
@endsection

@section('feedback')
    @include('client.page.feedback')
@endsection

@section('team')
    @include('client.page.team')
@endsection

@section('contact')
    @include('client.page.contact')
@endsection

@section('footer')
    @include('client.layout.footer')
@endsection

@section('js')
 <!-- Vendor JS Files -->
 <script src="{{ asset('client/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('client/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('client/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('client/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('client/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('client/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('client/node_modules/jquery/dist/jquery.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('client/assets/js/main.js')}}"></script>

  <!-- FancyBox for zoom in picture -->
  <script src="{{ asset('client/assets/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
@endsection
