<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.head')

<body class="theme-blush">

<!-- Page Loader (Takılmaması için kapalı tutuyoruz) -->
<div class="overlay"></div>

@include('layouts.partials.header')
@include('layouts.partials.sidebar')

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

@include('layouts.partials.scripts')
</body>
</html>
