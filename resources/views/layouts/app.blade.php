<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','home')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    @yield('style')
</head>

<body style="background-color: @yield('bg-color')">

    <!--
        ==================================================
                            Home Index
        ==================================================
        - Top Section Home
          - NavBar
          - InterFace
            - Interface Image
            - Interface text

        - Mid Section Home
          - Boxes
            - 3 Box
          - Lecturer
          - Lecturer
          - Objects

        - Bottom Section Home
          - Row
            - About US
            - con Us
          - Copy Right
          - Objects

        ==================================================
                                End
        ==================================================

    -->


    {{-- @yield('navbar') --}}

    @include('partials.navbar')


    @yield('content')

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/custem/script.js') }}"></script>
    <script src="{{asset('assets/vendors/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{ asset('assets/js/forms/form-repeater.min.js') }}"></script>
    @include('sweetalert::alert')
    @yield('script')
</body>

</html>
