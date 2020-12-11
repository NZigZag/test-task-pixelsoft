const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copyDirectory('resources/fonts', "public/fonts");

mix.sass('resources/front/sass/main.scss', 'public/css');
mix.scripts([
    'resources/front/js/main.js',
], "public/js/main.js");

mix.sass('resources/admin/sass/main.scss', 'public/admin/css');
mix.scripts([
    'resources/admin/js/main.js',
], "public/admin/js/main.js");
