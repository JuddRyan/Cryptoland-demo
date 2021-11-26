let mix = require('laravel-mix');

mix.js('assets/js/app.js', 'js/app.js')
  .sass('assets/scss/main.scss', 'css/main.css')
	.setPublicPath('dist');