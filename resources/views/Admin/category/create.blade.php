@extends('Admin.layouts.master')

@section('content')
<body class="">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <a href="" class="">
                        <button class="btn btn-success text-uppercase">@lang('back')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- content row -->
    <div class="container">
        <form action="" method="POST" class="px-5">
            <div class="form-group">
                <label for="name" class="text-dark">@lang('category_name')</label>
                <input type="text" name="categoryName" class="form-control">
            </div>
            <button class="btn btn-danger text-uppercase text-white">@lang('submit')</button>
        </form>
    </div>
@endsection
