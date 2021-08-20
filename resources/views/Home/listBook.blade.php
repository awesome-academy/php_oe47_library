@extends('layouts.master')

@section('title',trans('list_book'))

@section('banner')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>@lang('list_book')</h2>
            <span class="underline center"></span>
            <p class="lead">@lang('content_login')</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ route('home') }}">@lang('home')</a></li>
                <li><a href="">@lang('list_book')</a></li>
            </ul>
        </div>
    </div>
</section>
@endsection

@section('content2')
<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-full-width">
                <div class="container">
                    <!-- Start: Search Section -->
                    <section class="search-filters">
                        <div class="container">
                            <div class="filter-box">
                                <h3>@lang('search_title')</h3>
                                <form action="" method="get">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="sr-only" for="keywords">@lang('search_key')</label>
                                            <input class="form-control" placeholder="@lang('search_key')" id="keywords"
                                                name="keywords" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <select name="catalog" id="catalog" class="form-control">
                                                <option>@lang('search_price')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option>@lang('all_category')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="@lang('search')">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <div class="booksmedia-fullwidth">
                        <ul>
                            @foreach($books as $book)
                                <li>
                                    <div class="book-list-icon yellow-icon"></div>
                                    <figure>
                                        <a href="{{ route('detailBook',$book->id) }}"><img src="assets/images/1.jpg"
                                              alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="{{ route('detailBook',$book->id) }}">{{ $book->name }}</a></h4>
                                                <p><strong>@lang('author')</strong> {{ $book->author_name }}</p>
                                            </header>
                                            <p>{{ $book->description }}</p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Add TO CART">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Mail">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Share">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <nav class="navigation pagination text-center mx-5" aria-label="Page navigation">
                        <ul class="pagination justify-content-center ">
                            @if($books->currentPage() != 1)
                                <li class="page-item "><a class="page-link"
                                        href="{{ $books->url($books->currentPage() -1) }}">@lang('previous')</a></li>
                            @endif
                            @for($i= 1 ; $i<= $books->lastPage(); $i++)
                                <li class=" {{ ($books->currentPage() == $i )? 'active':''}} page-item">
                                    <a class="page-link" href="{{ $books->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if($books->currentPage() != $books->lastPage())
                                <li class="page-item"><a class="page-link"
                                    href="{{ $books->url($books->currentPage() +1) }}">@lang('next')</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->
@endsection
