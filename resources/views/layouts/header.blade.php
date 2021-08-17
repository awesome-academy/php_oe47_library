<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LIBRARIA | @yield('title')</title>
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <link href="assets/css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="{{ route('home') }}">
                                            <img src="assets/images/libraria-logo-v1.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                            <span>/</span>
                                            <a href="mailto:support@libraria.com"><i
                                                    class="fa fa-envelope"></i>support@libraria.com</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="topbar-links">
                                            <a href="{{  route('locale', ['en']) }}">@lang('english')</a>
                                            <span>|</span>
                                            <a href="{{  route('locale', ['vn']) }}"> @lang('vietnam')</a>
                                            <span>|</span>
                                            @guest
                                            @if(Route::has('login'))
                                            <a href="{{ route('login') }}"><i class="fa fa-lock"></i>@lang('login')</a>
                                            @endif
                                            <span>|</span>
                                            @if(Route::has('register'))
                                            <a href="{{ route('register') }}"><i
                                                    class="fa fa-lock"></i>@lang('register')</a>
                                            @endif
                                            @else
                                            <div class="header-cart dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                    {{ __('hello') }}! <b>{{ Auth::user()->username }}</b> <i
                                                        class="fa fa-account"></i>
                                                </a>
                                                <div class="dropdown-menu cart-dropdown">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <div class="item-info">
                                                                <a href=""><i
                                                                        class="fa fa-lock"></i>@lang('my_account')</a>
                                                            </div>
                                                        </li>
                                                        @if(Auth::user()->can('adminmiddleware', config('app.role_admin')))
                                                        <li class="clearfix">
                                                            <div class="item-info">
                                                                <a href="{{ route('admin.index') }}"><i
                                                                        class="fa fa-lock"></i>@lang('admin_index')</a>
                                                            </div>
                                                        </li>
                                                        @endif
                                                        <li class="clearfix">
                                                            <div class="item-info">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                    id="logout"
                                                                    onclick="event.preventDefault();
                                                            document.getElementById('form-logout').submit();">@lang('logout')</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <form id="form-logout" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>

                                            </div>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class=" active">
                                        <a class=" disabled" href="{{ route('home') }}">@lang('home')</a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                            href="books-media-list-view.html">@lang('book')</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">categoryName</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">@lang('review')</a></li>
                                    <li><a href="">@lang('borrow')</a></li>
                                    <li><a href="">@lang('checkout')</a></li>
                                    <li><a href="">@lang('contact')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <a href="index-2.html">
                                        <img src="assets/images/libraria-logo-v1.png" alt="LIBRARIA" />
                                    </a>
                                    <a href="#" class="close"></a>
                                </li>
                                <li> <a href="{{ route('home') }}">@lang('home')</a></li>
                                <li>
                                    <a href="books-media-list-view.html">@lang('book')</a>
                                    <ul>
                                        <li><a href="books-media-list-view.html">categoryName</a></li>
                                    </ul>
                                </li>
                                <li><a href="">@lang('review')</a></li>
                                <li><a href="">@lang('borrow')</a></li>
                                <li><a href="">@lang('checkout')</a></li>
                                <li><a href="">@lang('contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->
