<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Asansör 360') }} - Giriş</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('aero-theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aero-theme/assets/css/style.min.css') }}">
    @stack('css')
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        {{ $slot }}
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('aero-theme/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('aero-theme/assets/bundles/vendorscripts.bundle.js') }}"></script>
@stack('js')
</body>
</html>
