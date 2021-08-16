@extends('Admin.layouts.master')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between ">
                <h1 class="h3 mb-0 text-gray-800"></h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-6 ml-auto">
            <div class="row  mb-5">
                <div class="col-xl-3 col-sm-6 p-2">
                    <div class="card card-common">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                <div class="text-right text-secondary">
                                    <h5>@lang('book')</h5>
                                    <h3>45000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-secondary">
                            <i class="fas fa-sync mr-3"></i>
                            <span>@lang('update_now')</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 p-2">
                    <div class="card card-common">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <i class="fas fa-users fa-3x text-info"></i>
                                <div class="text-right text-secondary">
                                    <h5>@lang('user')</h5>
                                    <h3>15,000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-secondary">
                            <i class="fas fa-sync mr-3"></i>
                            <span>@lang('update_now')</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 p-2">
                    <div class="card card-common">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                <div class="text-right text-secondary">
                                    <h5>@lang('publisher')</h5>
                                    <h3>67000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-secondary">
                            <i class="fas fa-sync mr-3"></i>
                            <span>@lang('update_now')</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 p-2">
                    <div class="card card-common">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <i class="fas fa-chart-line fa-3x text-danger"></i>
                                <div class="text-right text-secondary">
                                    <h5>@lang('author')</h5>
                                    <h3>45,000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-secondary">
                            <i class="fas fa-sync mr-3"></i>
                            <span>@lang('update_now')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
