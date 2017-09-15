const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js');
//     .sass('resources/assets/sass/_variables.scss','public/css')
//   .sass('resources/assets/sass/app.scss','public/css')
//   .sass('resources/assets/sass/_badgets_labels.scss','public/css')
//   .sass('resources/assets/sass/_base.scss','public/css')
//   .sass('resources/assets/sass/_buttons.scss','public/css')
//   .sass('resources/assets/sass/_chat.scss','public/css')
//   .sass('resources/assets/sass/_custom.scss','public/css')
//   .sass('resources/assets/sass/_elements.scss','public/css')
//   .sass('resources/assets/sass/_landing.scss','public/css')
//   .sass('resources/assets/sass/_md-skin.scss','public/css')
//   .sass('resources/assets/sass/_media.scss','public/css')
//   .sass('resources/assets/sass/_metismenu.scss','public/css')
//   .sass('resources/assets/sass/_mixins.scss','public/css')
//   .sass('resources/assets/sass/_navigation.scss','public/css')
//   .sass('resources/assets/sass/_pages.scss','public/css')
//   .sass('resources/assets/sass/_rtl.scss','public/css')
//   .sass('resources/assets/sass/_sidebar.scss','public/css')
//   .sass('resources/assets/sass/_skins.scss','public/css')
//   .sass('resources/assets/sass/_spinners.scss','public/css')
//   .sass('resources/assets/sass/_theme-config.scss','public/css')
//   .sass('resources/assets/sass/_top_navigation.scss','public/css')
//   .sass('resources/assets/sass/_typography.scss','public/css');
//   .sass('resources/assets/sass/style.scss','public/css');
   // .copy('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
mix.sass('resources/assets/scss/app.scss', 'public/css')
    .sass('resources/assets/scss/style.scss', 'public/css')
    // .sourceMaps()
    ;