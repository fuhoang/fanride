var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  var bootstrapPath = 'node_modules/bootstrap-sass/assets';
  mix.sass([
      'app.scss',
      'home.scss'

    ])
  	.scripts('resources/assets/js/app.js', 'public/js')
  	.copy('node_modules/font-awesome/', 'public/fonts/font-awesome')
  	.copy('node_modules/jquery/dist/jquery.js', 'public/js')
    .copy(bootstrapPath + '/fonts', 'public/fonts')
    .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
    .copy('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'public/css')
    .copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'public/js')
    .copy('node_modules/bootstrap-select/dist/js/bootstrap-select.min.js', 'public/js')
    .copy('node_modules/bootstrap-select/dist/css/bootstrap-select.min.css', 'public/css');

});