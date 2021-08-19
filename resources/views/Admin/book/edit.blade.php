@extends('Admin.layouts.master')

@section('content')

<body class="">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <a href="{{ route('books.index') }}" class="">
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
        <form action="{{ route('books.update', $book->id) }}" method="POST" class="px-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="text-dark">@lang('book')</label>
                <input type="text" value="{{ $book->name }}" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" class="text-dark">@lang('book_name')</label>
                <input type="text" value="{{ $book->description }}" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="quantity" class="text-dark">@lang('quantity')</label>
                <input type="text" value="{{ $book->quantity }}" name="quantity" class="form-control">
            </div>
            <div class="form-group">
                <label for="status" class="text-dark">@lang('status')</label>
                <input type="text" value="{{ $book->status }}" name="status" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="publisher_id" class="col-md-4 control-label">@lang('publisher')</label>
                        <div class="col-md-12">
                            <select id="publisher"
                                class="form-control{{ $errors->has('publisher_id') ? ' is-invalid' : '' }}"
                                name="publisher">
                                @foreach ($publishers as $publisher)
                                    @if($publisher->publisher_id == $book->publisher_id)
                                        <option value="{{ $publisher->publisher_id }}">
                                            {{ $publisher->publisher_name }}</option>
                                    @else
                                        <option value="{{ $publisher->publisher_id }}">
                                            {{ $publisher->publisher_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('publisher_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('publisher_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="author_id" class="col-md-4 control-label">@lang('author')</label>
                        <div class="col-md-12">
                            <select id="author" class="form-control{{ $errors->has('author_id') ? ' is-invalid' : '' }}"
                                name="author">
                                @foreach ($authors as $author)
                                    @if($author->author_id == $book->author_id)
                                        <option value="{{ $author->author_id }}">
                                            {{ $author->author_name }}</option>
                                    @else
                                        <option value="{{ $author->author_id }}">
                                            {{ $author->author_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('author_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('author_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger text-uppercase text-white">@lang('submit')</button>
        </form>
    </div>
@endsection
