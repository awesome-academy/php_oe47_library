@extends('Admin.layouts.master')

@section('content')

<body class="">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <a href="" class=" ">
                        <button
                            class="btn btn-primary text-decoration-none text-white text-uppercase">@lang('add_new')</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>@lang('name')</th>
                        <th>@lang('action')</th>
                    </tr>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <div>
                                <a href=""> <button class="btn btn-success text-white" method="GET">
                                        @lang('edit')</button></a>
                                <button class="btn btn-danger text-white" onclick=""></button>
                                <form action="" method="POST" id="form-delete-id" method="post"></form>

                            </div>
                        </td>
                    </tr>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
    <!-- content row -->
@endsection
