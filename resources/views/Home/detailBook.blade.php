@extends('layouts.master')

@section('title',trans('detail_book'))

@section('banner')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>@lang('detail_book')</h2>
            <span class="underline center"></span>
            <p class="lead">@lang('content_login')</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="{{ route('home') }}">@lang('home')</a></li>
                <li>@lang('detail_book')</li>
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
            <div class="booksmedia-detail-main">
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
                    <div class="booksmedia-detail-box">
                        <div class="detailed-box">
                            <div class="col-xs-12 col-sm-5 col-md-3">
                                <div class="post-thumbnail">
                                    <div class="book-list-icon yellow-icon"></div>
                                    <img src="{{ asset('assets/images/1.jpg') }}" width="200" height="300"
                                        alt="Book Image" class="text-center">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-6">

                                <div class="post-center-content">
                                    <h2>{{ $books->name }}</h2>
                                    <p><strong>@lang('author'): </strong> {{ $books->author_name }}</p>
                                    <p><strong>@lang('publisher'): </strong>{{ $books->publisher_name }}</p>
                                    <p><strong>@lang('rate')</strong>
                                            <span>☆</span>
                                            <span>☆</span>
                                            <span>☆</span>
                                            <span>☆</span>
                                            <span>☆</span>
                                   </p>
                                    <p><strong>@lang('quantity'): </strong> {{ $books->quantity }}</p>
                                    <p><strong>@lang('status'): </strong> {{ $books->status }}</p>

                                    <div class="actions">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                    title="" data-original-title="Add To Cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                    title="" data-original-title="Like">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                    title="" data-original-title="Mail">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                    title="" data-original-title="Search">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                    title="" data-original-title="Print">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                    title="" data-original-title="Print">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 ">
                                <div class="post-right-content">
                                    @if($books->quantity > 0 )
                                        <h4>@lang('avaiable_now')</h4>
                                        <p><strong>@lang('avaiable')</strong> 019780062419385</p>
                                        <p><strong>@lang('hold')</strong> 01</p>
                                        <p><strong>@lang('shevels'): </strong> @lang('library')</p>
                                        <a href="#" class="btn btn-dark-gray">@lang('borrow')</a>
                                    @else
                                        <a href="#" class="btn btn-dark-gray disabled">@lang('borrow')</a>
                                    @endif

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>
                        <p><strong>@lang('note')</strong> @lang('content') </p>

                        <div class="table-tabs" id="responsiveTabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab"
                                        href="#sectionB">@lang('review')</a></li>
                                <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">@lang('comment')</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <ul>
                                    <li id="sectionB" class="tab-pane fade in active">
                                        <h5>@lang('content')</h5>
                                        <p>@lang('about_content')</p>
                                    </li>
                                    <li id="sectionC" class="tab-pane fade in">
                                        <h5></h5>
                                        <p>@lang('content_home')</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->
@endsection
