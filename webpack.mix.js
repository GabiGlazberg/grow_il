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

mix .js('resources/assets/web/js/app.js',                       'public/assets/web/js')
    .sass('resources/assets/web/sass/main-ltr.scss',            'public/assets/web/css')
    .sass('resources/assets/web/sass/main-rtl.scss',            'public/assets/web/css')
    .copy('resources/assets/web/fonts/*/**',                    'public/assets/web/fonts')
    .copy('resources/assets/web/images',                        'public/assets/web/images');
