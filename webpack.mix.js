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
mix
    .js('resources/js/user-dang-ky.js', 'public/js/user-dang-ky.js')
    .js('resources/js/user-dang-ky-khoan-vay.js', 'public/js/user-dang-ky-khoan-vay.js')
    .js('resources/js/user-dang-nhap.js', 'public/js/user-dang-nhap.js')
    .js('resources/js/user-xac-minh.js', 'public/js/user-xac-minh.js')
    .options({
        processCssUrls: false
    })
