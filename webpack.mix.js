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

mix
  .js('resources/js/vendor.js', 'public/js')
  .js('resources/js/app.js', 'public/js')
  .js('resources/js/pages/introduction.js', 'public/js/pages')
  .js('resources/js/pages/studies.js', 'public/js/pages')
  .js('resources/js/pages/experiences.js', 'public/js/pages')
  .js('resources/js/pages/projects.js', 'public/js/pages')
  .js('resources/js/pages/carpediem.js', 'public/js/pages')
  .sass('resources/sass/vendor.scss', 'public/css')
  .sass('resources/sass/app.scss', 'public/css');
