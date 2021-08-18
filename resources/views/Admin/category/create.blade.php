@extends('Admin.layouts.master')

@section('content')

<body class="">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <a href="{{ route('categories.index') }}" class="">
                        <button class="btn btn-success text-uppercase">@lang('back')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- content row -->
    <div class="container">
        @if (session('message'))
            <div class="alert alert-{{ session('message.status') }} mb-4">
                {{ session('message.msg') }}
            </div>
        @endif
        <form action="{{ route('categories.store') }}" method="POST" class="px-5">
            @csrf
            <div class="form-group">
                <label for="name" class="text-dark">@lang('category_name')</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" class="text-dark">@lang('categories_desc')</label>
                <input type="text" name="description" class="form-control">
            </div>
            <label for="parent_id">
                @lang('parent_id')
            </label>
            <select name="parent_id" id="" class="form-control">
                <option value="null">@lang('none')</option>
                @foreach ($list_category as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('parent_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('parent_id') }}</strong>
                </span>
            @endif
            <button class="btn btn-danger text-uppercase text-white">@lang('submit')</button>
        </form>
    </div>
@endsection
