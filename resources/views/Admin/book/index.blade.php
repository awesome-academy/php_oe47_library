@extends('Admin.layouts.master')

@section('content')

<body class="">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="d-sm-flex align-items-center justify-content-between ">
                    <a href="{{ route('books.create') }}" class=" ">
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
                        <th>@lang('image')</th>
                        <th>@lang('author_name')</th>
                        <th>@lang('publisher_name')</th>
                        <th>@lang('name')</th>
                        <th>@lang('book_desc')</th>
                        <th>@lang('quantity')</th>
                        <th>@lang('status')</th>
                        <th>@lang('action')</th>
                    </tr>
                <tbody>
                    @foreach ($listBooks as $book )
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td><img width="60" height="100" src="/assets/images/1.jpg"></td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author_name }}</td>
                            <td>{{ $book->publisher_name }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->quantity }}</td>
                            <td>{{ $book->status }}</td>
                            <td>
                                <div class='d-block'>
                                    <a href="{{ route('books.edit', $book->id) }}">
                                        <button class="btn btn-success text-white" method="GET">
                                            @lang('edit')</button>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-danger text-white">@lang('delete')
                                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
        <nav class="text-center " aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                @if($listBooks->currentPage() != 1)
                    <li class="page-item "><a class="page-link"
                            href="{{ $listBooks->url($listBooks->currentPage() -1) }}">@lang('previous')</a></li>
                @endif
                @for($i= 1 ; $i<= $listBooks->lastPage(); $i++)
                    <li class=" {{ ($listBooks->currentPage() == $i )? 'active':''}} page-item">
                        <a class="page-link" href="{{ $listBooks->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                    @if($listBooks->currentPage() != $listBooks->lastPage())
                        <li class="page-item"><a class="page-link"
                                href="{{ $listBooks->url($listBooks->currentPage() +1) }}">@lang('next')</a></li>
                    @endif
            </ul>
        </nav>

    </div>
    <!-- content row -->
@endsection
