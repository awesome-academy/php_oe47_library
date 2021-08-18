@extends('layouts.master')

@section('title',trans('login'))

@section('banner')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>@lang('sign_in')</h2>
            <span class="underline center"></span>
            <p class="lead">@lang('content_login')</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ route('home') }}">@lang('home')</a></li>
                <li>@lang('sign_in')</li>
            </ul>
        </div>
    </div>
</section>
@endsection

@section('content2')
<!-- Start: Cart Section -->
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
<div class="alert alert-success alert-dismissible" role="alert">
    <strong>{{ Session::get('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>{{ Session::get('error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="signin-main">
                <div class="container">
                    <div class="woocommerce">
                        <div class="woocommerce-login">
                            <div class="company-info signin-register">
                                <div class="col-md-10 col-md-offset-1 border-dark-left">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="company-detail bg-dark margin-left">
                                                <div class="signin-head">
                                                    <h2>@lang('sign_in')</h2>
                                                    <span class="underline left"></span>
                                                </div>
                                                <form class="login" method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <p class="form-row form-row-first input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('username')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="email" id="email" name="email" required
                                                            autocomplete="email" autofocus
                                                            class="input-text @error('email')is-invalid @enderror">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>
                                                    <p class="form-row form-row-last input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('password')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="password" id="password" name="password" required
                                                            autocomplete="password"
                                                            class="input-text @error('password')is-invalid @enderror">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>
                                                    <div class="clear"></div>
                                                    <div class="password-form-row">
                                                        <p class="form-row input-checkbox">
                                                            <input type="checkbox" value="forever" id="remember"
                                                                name="remember" {{ old('remember') ? 'checked' :'' }}>
                                                            <label class="inline"
                                                                for="remember">@lang('remember_me')</label>
                                                        </p>
                                                        @if(Route::has('password.request'))
                                                        <p class="lost_password">
                                                            <a
                                                                href="{{ route('password.request') }}">@lang('lost_pin')</a>
                                                        </p>
                                                        @endif

                                                    </div>
                                                    <input type="submit" value="@lang('login')" name="login"
                                                        class="button btn btn-default">
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Cart Section -->
@endsection
