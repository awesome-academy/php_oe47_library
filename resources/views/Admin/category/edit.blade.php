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
        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="px-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="text-dark">@lang('category_name')</label>
                <input type="text" value="{{ $category->name }}" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" class="text-dark">@lang('descrip')</label>
                <input type="text" value="{{ $category->description }}" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="parent">
                    @lang('parent_id')
                </label>
                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="0">@lang('none')</option>
                    @foreach ($categories as $cate)
                        @if($cate->id != $category->id)
                            <option value="{{ $cate->id }}"
                                <?php if ($cate->id == $category->parent_id ) echo"seleted='true'"?>>
                                {{ $cate->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button class="btn btn-danger text-uppercase text-white">@lang('submit')</button>
        </form>
    </div>
@endsection
