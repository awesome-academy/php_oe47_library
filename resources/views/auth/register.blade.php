@extends('layouts.master')

@section('title',trans('register'))

@section('banner')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>@lang('register')</h2>
            <span class="underline center"></span>
            <p class="lead">@lang('content_login')</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ route('home') }}">@lang('home')</a></li>
                <li>@lang('register')</li>
            </ul>
        </div>
    </div>
</section>

@section('content2')
<!-- Start: Cart Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="signin-main">
                <div class="container">
                    <div class="woocommerce">
                        <div class="woocommerce-login">
                            <div class="company-info signin-register">
                                <div class="col-md-10 border-dark new-user">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="company-detail new-account bg-light margin-right">
                                                <div class="new-user-head">
                                                    <h2>@lang('create_account')</h2>
                                                    <span class="underline left"></span>
                                                    <p>@lang('content_login')</p>
                                                </div>
                                                <form class="login" method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <p class="form-row form-row-first input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('fullname')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="text" id="fullname" name="fullname"
                                                            value="{{ old('fullname') }}" required
                                                            autocomplete="fullname" autofocus class="input-text @error('fullname') is-invalid
                                                            @enderror">

                                                        @error('fullname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>
                                                    <p class="form-row form-row-first input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('username')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="text" id="username" name="username" required
                                                            autocomplete="username" value="{{ old('username') }}"
                                                            class="input-text @error('username') is-invalid @enderror">

                                                        @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>
                                                    <p class="form-row form-row-first input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('email')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="text" id="email" name="email" required
                                                            autocomplete="email" value="{{ old('email') }}"
                                                            class="input-text @error('email') is-invalid @enderror">

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>
                                                    <p class="form-row input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('password')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="password" id="password" name="password" required
                                                            autocomplete="new_password"
                                                            class="input-text @error('password') is-invalid @enderror">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </p>
                                                    <p class="form-row input-required">
                                                        <label>
                                                            <span class="first-letter">@lang('password_confirm')</span>
                                                            <span class="second-letter">*</span>
                                                        </label>
                                                        <input type="password" id="password_confirm"
                                                            name="password_confirmation" required
                                                            autocomplete="new_password" class="input-text">
                                                    </p>
                                                    <div class="clear"></div>
                                                    <input type="submit" value="@lang('register')" name="signup"
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
@endsection
