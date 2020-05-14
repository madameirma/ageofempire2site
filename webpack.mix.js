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
	.js('resources/js/civSelection.js', 'public/js')
	.js('resources/js/searchbar.js', 'public/js')
	.js('resources/js/unitSelection.js', 'public/js')
	.sass('resources/sass/civ.scss', 'public/css')
	.sass('resources/sass/comparator.scss', 'public/css')
	.sass('resources/sass/nav.scss', 'public/css')
	.sass('resources/sass/post-form.scss', 'public/css')
	.sass('resources/sass/reset.scss', 'public/css')
	.sass('resources/sass/uniqueciv.scss', 'public/css')
	.sass('resources/sass/unit.scss', 'public/css')
	.sass('resources/sass/welcome.scss', 'public/css')
	.sass('resources/sass/home.scss', 'public/css')

mix.styles([
    'public/css/civ.css',
    'public/css/comparator.css',
    'public/css/nav.css',
    'public/css/post-form.css',
    'public/css/uniqueciv.css',
    'public/css/unit.css',
    'public/css/welcome.css',
    'public/css/home',
], 'public/css/all.css');