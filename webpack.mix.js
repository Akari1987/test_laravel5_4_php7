let mix = require('laravel-mix');

mix.webpackConfig({ 
    devtool: "inline-source-map",
});
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

// mix.options({
//   sourcemaps: 'inline-source-map'
// });

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js2/app2.js', 'public/js/app2.js')
    .sass('resources/assets/scss/app.scss', 'public/css')
    .sass('resources/assets/scss/style.scss', 'public/css')
    .sass('resources/assets/scss2/app.scss', 'public/css2')
    .sass('resources/assets/scss2/style.scss', 'public/css2')
    .sourceMaps();