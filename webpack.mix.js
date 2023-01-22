const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/bootstrap.scss', 'css')
    .sass('resources/sass/themes/dark/app-dark.scss', 'css')
    .sass('resources/sass/app.scss', 'css')
    .sass('resources/sass/pages/auth.scss', 'css/pages')
    .setPublicPath('public/assets');
