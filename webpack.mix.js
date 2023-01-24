const mix = require('laravel-mix');
const fs = require('fs');

mix.options({
    processCssUrls: true,
    publicPath: '/assets',
});

mix.js('resources/js/app.js', 'js')
    .js('resources/js/bootstrap.js', 'js')
    .js('resources/js/initTheme.js', 'js')
    .js('resources/js/pages/dashboard.js', 'js/pages')
    .js('resources/js/pages/component-toasts.js', 'js/pages');

mix.sass('resources/sass/bootstrap.scss', 'css')
    .sass('resources/sass/themes/dark/app-dark.scss', 'css')
    .sass('resources/sass/app.scss', 'css')
    .sass('resources/sass/pages/auth.scss', 'css/pages')
    .sass('resources/sass/iconly.scss', 'css');

mix.sourceMaps(true)
    .setPublicPath('public/assets')
    .setResourceRoot('/assets');
