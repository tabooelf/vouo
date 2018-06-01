let mix = require('laravel-mix');

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

mix.styles([
    'resources/assets/plugins/font-awesome/css/font-awesome.min.css',
    'resources/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css',
    'resources/assets/plugins/ps-icon/ps-icon.css',
    'resources/assets/plugins/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/plugins/owl-carousel/assets/owl.carousel.css',
    'resources/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css',
    'resources/assets/plugins/Magnific-Popup/dist/magnific-popup.css',
    'resources/assets/plugins/jquery-ui/jquery-ui.min.css',
    'resources/assets/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
    'resources/assets/plugins/slick/slick/slick.css',
    'resources/assets/plugins/revolution/css/settings.css',
    'resources/assets/plugins/revolution/css/layers.css',
    'resources/assets/plugins/revolution/css/navigation.css',
    'resources/assets/css/style.css'
], 'public/css/app.css');

mix.scripts([
    'resources/assets/plugins/jquery/dist/jquery.min.js',
    'resources/assets/plugins/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/plugins/owl-carousel/owl.carousel.min.js',
    'resources/assets/plugins/overflow-text.js',
    'resources/assets/plugins/masonry.pkgd.min.js',
    'resources/assets/plugins/imagesloaded.pkgd.js',
    'resources/assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js',
    'resources/assets/plugins/jquery-nice-select/js/jquery.nice-select.min.js',
    'resources/assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js',
    'resources/assets/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/plugins/moment.js',
    'resources/assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
    'resources/assets/plugins/slick/slick/slick.min.js',
    'resources/assets/plugins/skrollr.min.js',
    'resources/assets/plugins/revolution/js/jquery.themepunch.tools.min.js',
    'resources/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js',
    'resources/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js',
    'resources/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js',
    'resources/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js',
    'resources/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js',
    'resources/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js',
    'resources/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js',
    'resources/assets/js/main.js',
], 'public/js/app.js')
mix.copyDirectory('resources/assets/images/', 'public/images')
mix.copyDirectory('resources/assets/plugins/font-awesome/fonts', 'public/fonts')
mix.copyDirectory('resources/assets/plugins/revolution/fonts/revicons', 'public/fonts/revicons')