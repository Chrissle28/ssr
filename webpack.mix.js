const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

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

mix.ts('resources/js/app.ts', 'public/js').vue().mergeManifest();

mix.postCss('resources/css/app.css', 'public/css', [require('tailwindcss')]);

mix.browserSync({
    proxy: 'http://cms-test.test',
    notify: false,
});
