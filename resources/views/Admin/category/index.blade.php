@extends('Admin.layouts.master')

@section('content')

<body class="">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <a href="{{ route('categories.create') }}" class=" ">
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
                        <th>@lang('categories_desc')</th>
                        <th>@lang('parent_id')</th>
                        <th>@lang('action')</th>
                    </tr>
                <tbody>
                    @foreach ($categories as $category )
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->parent_id }}</td>
                            <td>
                                <div class='d-block'>
                                    <a href="{{ route('categories.edit', $category->id) }}">
                                        <button class="btn btn-success text-white" method="GET">
                                            @lang('edit')</button>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-danger text-white" >@lang('delete')
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        id="form-delete-id" onclick="confirm ('Do you want delete it?')?$('#form-delete-{{ $category->id }}').submit():''">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
            <nav class="text-center "aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    @if($categories->currentPage() != 1)
                    <li class="page-item "><a class="page-link"  href="{{ $categories->url($categories->currentPage() -1) }}">@lang('previous')</a></li>
                    @endif
                    @for($i= 1 ; $i<= $categories->lastPage(); $i++)
                        <li class=" {{ ($categories->currentPage() == $i )? 'active':''}} page-item">
                            <a class="page-link" href="{{ $categories->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor
                        @if($categories->currentPage() != $categories->lastPage())
                        <li class="page-item"><a class="page-link" href="{{ $categories->url($categories->currentPage() +1) }}">@lang('next')</a></li>
                        @endif
                </ul>
            </nav>
        </div>
    </div>
    <!-- content row -->
@endsection
