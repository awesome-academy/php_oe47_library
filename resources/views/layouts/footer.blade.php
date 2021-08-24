<footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">@lang('about')</h3>
                        <span class="underline left"></span>
                        <div class="textwidget">
                            @lang('about_content')
                        </div>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span>@lang('hue_vietnam')</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">@lang('timing')</h3>
                        <span class="underline left"></span>
                        <div class="timming-text-widget">
                            <time datetime="2021-02-13">@lang('mon_thu')</time>
                            <time datetime="2021-02-13">@lang('fri')</time>
                            <time datetime="2021-02-13">@lang('sat')</time>
                            <time datetime="2021-02-13">@lang('sun')</time>
                            <ul>
                                <li><a href="#">@lang('close')</a></li>
                                <li><a href="#">@lang('branches')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div class="widget twitter-widget">
                        <h3 class="footer-widget-title"> @lang('review_lastest')</h3>
                        <span class="underline left"></span>
                        <div id="twitter-feed">
                            <ul>
                                <li>
                                    <p><a href="#">@TemplateLibraria</a> @lang('infor_web') <a
                                            href="#">Libraria.com</a></p>
                                </li>
                                <li>
                                    <p><a href="#">@TemplateLibraria</a> @lang('infor_web') <a
                                            href="#">Libraria.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" href="">&copy; @lang('copyright')</a></p>
                </div>
                <div class="col-md-9 pull-right">
                    <ul>
                        <li><a href="{{ route('home') }}">@lang('home')</a></li>
                        <li><a href="">@lang('book')</a></li>
                        <li><a href="#">@lang('search')</a></li>
                        <li><a href="">@lang('contact')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->
<script type="text/javascript" src="{{ mix('/js/main.js') }}"></script>

</body>
