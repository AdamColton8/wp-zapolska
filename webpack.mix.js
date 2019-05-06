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

mix.setPublicPath('dist');
mix.options({ processCssUrls: false })

mix.webpackConfig({
    externals: {
        jquery: 'jQuery',
        jQuery: 'jQuery',
        $: 'jQuery',
    }
});


mix.js('assets/js/app.js', 'dist/js')
    .sass('assets/sass/style.scss', 'dist/css')
    //.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'dist/fonts/fontawesome')
    .copy('assets/fontawesome-pro/webfonts', 'dist/fonts/fontawesome')
    .copy('assets/fonts', 'dist/fonts/')
    .copy('assets/images', 'dist/images/')
    .copy('node_modules/slick-carousel/slick/ajax-loader.gif', 'dist/css')
    .copy('node_modules/slick-carousel/slick/fonts/slick.ttf', 'dist/css/fonts')
    .copy('node_modules/slick-carousel/slick/fonts/slick.woff', 'dist/css/fonts')
    .disableNotifications()
