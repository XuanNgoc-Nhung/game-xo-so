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
    .js('resources/js/admin-cau-hinh-1-phut.js', 'public/js/admin-cau-hinh-1-phut.js')
    .js('resources/js/user-ket-qua-lo-mot-phut.js', 'public/js/user-ket-qua-lo-mot-phut.js')
    .options({
        processCssUrls: false
    })
