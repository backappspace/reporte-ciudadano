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

mix.js('resources/js/manager/manager.js', 'public/js')
    .js('resources/js/webapp/webapp.js', 'public/js')
    .js('resources/js/website/website.js', 'public/js')
   .sass('resources/sass/manager.scss', 'public/css')
   .sass('resources/sass/webapp.scss', 'public/css')
   .sass('resources/sass/website.scss', 'public/css');
