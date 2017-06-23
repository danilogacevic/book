let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

/**
 * Created by edwin on 3/26/17.
 */
// const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');



mix.styles([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/magnific-popup.css',
        'resources/assets/css/animate.css',
        'resources/assets/css/main.css',
        'resources/assets/css/responsive.css',

            ], 'public/css/template.css');

mix.scripts([

        'resources/assets/js/template/jquery.magnific-popup.min.js',
        'resources/assets/js/template/jquery.ajaxchimp.min.js',
        'resources/assets/js/template/modernizr-custom.js',
        'resources/assets/js/template/jquery.easing.min.js',
        'resources/assets/js/template/wow.min.js',
        'resources/assets/js/template/bootstrap.min.js',
        'resources/assets/js/template/scripts.js',

            ], 'public/js/template.js');