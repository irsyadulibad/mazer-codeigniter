const mix = require('laravel-mix');

mix.options({
    processCssUrls: true,
    publicPath: '/assets',
});

mix.js('resources/js/app.js', 'js')
    .js('resources/js/bootstrap.js', 'js')
    .js('resources/js/initTheme.js', 'js')
    .sass('resources/sass/bootstrap.scss', 'css')
    .sass('resources/sass/themes/dark/app-dark.scss', 'css')
    .sass('resources/sass/app.scss', 'css')
    .sass('resources/sass/pages/auth.scss', 'css/pages')
    .sourceMaps(true)
    .setPublicPath('public/assets')
    .setResourceRoot('/assets');
