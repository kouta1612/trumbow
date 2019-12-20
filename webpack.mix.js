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
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/trumbow.js', 'public/js')
    .js('node_modules/trumbowyg/plugins/upload/trumbowyg.upload.js', 'public/js')
    .copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/svg');

mix.js('resources/js/upload.js', 'public/js')
    .js('resources/js/validate.js', 'public/js');