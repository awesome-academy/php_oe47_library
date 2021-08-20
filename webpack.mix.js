const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/public/assets/images/favicon.ico',
    'public/assets/css/font-awesome.min.css',
    'public/assets/css/mmenu.css',
    'public/assets/css/mmenu.positioning.css',
    'style.css'
], 'public/css/style.css');

mix.scripts([
    'public/assets/js/jquery-1.12.4.min.js',
    'public/assets/js/jquery-ui.min.js',
    'public/assets/js/jquery.easing.1.3.js',
    'public/assets/js/bootstrap.min.js',
    'public/assets/js/mmenu.min.js',
    'public/assets/js/harvey.min.js',
    'public/assets/js/waypoints.min.js',
    'public/assets/js/facts.counter.min.js',
    'public/assets/js/mixitup.min.js',
    'public/assets/js/owl.carousel.min.js',
    'public/assets/js/accordion.min.js',
    'public/assets/js/responsive.tabs.min.js',
    'public/assets/js/responsive.table.min.js',
    'public/assets/js/masonry.min.js',
    'public/assets/js/carousel.swipe.min.js',
    'public/assets/js/bxslider.min.js',
    'public/assets/js/main.js'
], 'public/js/main.js');

mix.copy('public/assets/fonts/', 'public/fonts');
