<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Asansör 360') }} - @yield('title', 'Yönetim Paneli')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('aero-theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aero-theme/assets/css/style.min.css') }}">
    @stack('css')
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('aero-theme/assets/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
        <p>Lütfen bekleyiniz...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Navbar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <a href="javascript:void(0);" onclick="document.getElementById('logout-form').submit();" class="mega-menu" title="Çıkış Yap">
                    <i class="zmdi zmdi-power"></i>
                </a>
            </form>
        </li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route('dashboard') }}"><img src="{{ asset('aero-theme/assets/images/custom/asansor360_logo.png') }}" width="120" alt="Asansör 360"></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="{{ route('profile.edit') }}"><img src="{{ asset('aero-theme/assets/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->email }}</small>                        
                    </div>
                </div>
            </li>
            <li class="{{ request()->routeIs('dashboard') ? 'active open' : '' }}"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ request()->routeIs('companies.*') ? 'active open' : '' }}"><a href="{{ route('companies.index') }}"><i class="zmdi zmdi-city"></i><span>Firmalar</span></a></li>
            <li class="{{ request()->routeIs('users.*') ? 'active open' : '' }}"><a href="{{ route('users.index') }}"><i class="zmdi zmdi-accounts"></i><span>Kullanıcılar</span></a></li>
        </ul>
    </div>
</aside>

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>@yield('title')</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        @yield('breadcrumb')
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="{{ asset('aero-theme/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('aero-theme/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('aero-theme/assets/bundles/mainscripts.bundle.js') }}"></script>
@stack('js')
</body>
</html>
