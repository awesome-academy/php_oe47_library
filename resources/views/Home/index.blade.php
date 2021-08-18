@extends('layouts.header')

<!-- Start: Slider Section -->
<div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
    <!-- Carousel slides -->
    <div class="carousel-inner">
        <div class="item active">
            <figure>
                <img alt="Home Slide" src="assets/images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>@lang('title_home')</h3>
                    <h2>@lang('sub_title')</h2>
                    <p>@lang('content_home')</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="#" class="btn btn-primary">@lang('read_more')</a>
                        <a href="#" class="btn btn-default">@lang('borrow')</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <figure>
                <img alt="Home Slide" src="assets/images/header-slider/home-v1/header-slide.jpg" />
            </figure>
            <div class="container">
                <div class="carousel-caption">
                    <h3>@lang('title_home')</h3>
                    <h2>@lang('sub_title')</h2>
                    <p>@lang('content_home')</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="#" class="btn btn-primary">@lang('read_more')</a>
                        <a href="#" class="btn btn-default">@lang('borrow')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
    <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
</div>
<!-- End: Slider Section -->

<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <h3>@lang('search_title')</h3>
            <form action="" method="get">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="sr-only" for="keywords">@lang('search_key')</label>
                        <input class="form-control" placeholder="@lang('search_key')" id="keywords" name="keywords"
                            type="text">
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
<!-- End: Search Section -->
<!-- Start: Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-wrap">
                    <div class="welcome-text">
                        <h2 class="section-title">@lang('welcome')</h2>
                        <span class="underline left"></span>
                        <p class="lead">@lang('title_home')</p>
                        <p>@lang('content_home')</p>
                        <a class="btn btn-primary" href="#">@lang('read_more')</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-counter">
                    <ul>
                        <li class="bg-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>@lang('book')<strong class="fact-counter">45780</strong></span>
                            </div>
                        </li>
                        <li class="bg-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="eaudio"></i>
                                </div>
                                <span>@lang('author')<strong class="fact-counter">32450</strong></span>
                            </div>
                        </li>
                        <li class="bg-red">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>@lang('publisher')<strong class="fact-counter">14450</strong></span>
                            </div>
                        </li>
                        <li class="bg-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="videos"></i>
                                </div>
                                <span>@lang('review')<strong class="fact-counter">32450</strong></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image"></div>
</section>
<!-- End: Welcome Section -->
@extends('layouts.footer')
