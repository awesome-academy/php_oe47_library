@extends('layouts.master')
@section('title',trans('verify'))

@section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('verify_email')</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        @lang('content_email') </div>
                    @endif

                    @lang('before_email'),
                    @lang('revice_email')
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">@lang('click_request')</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
