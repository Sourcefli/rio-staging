const mix = require("laravel-mix");

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

mix.sass("resources/sass/app.scss", "public/css/admin.css")
    .babel("resources/js/app.js", "public/js/admin.js")
    .browserSync("http://rio-laravel.test/")
    .options({
        processCssUrls: false
    });