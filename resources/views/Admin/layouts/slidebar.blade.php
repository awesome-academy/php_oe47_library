<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/assets/img/favicon.png">
                </div>
            </a>
            <a href="" class="simple-text logo-normal">
               @lang('library_management')
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="{{ route('index') }}">
                        <i class="nc-icon nc-bank"></i>
                        <p>@lang('dashboard')</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('books.index') }}">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>@lang('book')</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class="nc-icon nc-diamond"></i>
                        <p>@lang('category')</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>@lang('author')</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>@lang('publisher')</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>@lang('borrow')</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>@lang('review')</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
