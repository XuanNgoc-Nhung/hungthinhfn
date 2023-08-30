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
    .js('resources/js/user-xac-minh-thong-tin-ca-nhan.js', 'public/js/user-xac-minh-thong-tin-ca-nhan.js')
    .js('resources/js/user-xac-minh-thong-tin-ngan-hang.js', 'public/js/user-xac-minh-thong-tin-ngan-hang.js')
    .js('resources/js/user-xac-nhan-khoan-vay.js', 'public/js/user-xac-nhan-khoan-vay.js')
    .js('resources/js/user-vi-tien.js', 'public/js/user-vi-tien.js')
    .js('resources/js/user-hop-dong-vay.js', 'public/js/user-hop-dong-vay.js')
    .js('resources/js/admin-quan-ly-khoan-vay.js', 'public/js/admin-quan-ly-khoan-vay.js')
    .js('resources/js/admin-quan-ly-tai-khoan.js', 'public/js/admin-quan-ly-tai-khoan.js')
    .js('resources/js/admin-yeu-cau-rut-tien.js', 'public/js/admin-yeu-cau-rut-tien.js')
    .js('resources/js/gen-so-dien-thoai.js', 'public/js/gen-so-dien-thoai.js')
    .options({
        processCssUrls: false
    })
