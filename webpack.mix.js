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

mix.js('resources/js/app.js', 'public/js')
    .css('resources/sass/app.css', 'public/css')
    .css('resources/sass/bootstrap.min.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css');

mix.scripts([
    'resources/js/home.js',
    'resources/js/jquery.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.easing.1.3.js',
    'resources/js/jquery.parallax-1.1.js',
    'resources/js/jquery.scrollTo-1.4.3.1.min.js'
], 'public/js/all.js');