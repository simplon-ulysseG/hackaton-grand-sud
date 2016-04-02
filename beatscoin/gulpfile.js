var elixir = require('laravel-elixir');
elixir.config.js.browserify.transformers.push({
	'name':'babelify',
	'options':{}
});
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
    mix.sass('app.scss');
});


elixir(function(mix){
	mix.browserify('app.js');
});

elixir(function(mix){
	mix.browserSync({
		proxy:'beatscoin.dev'
	});
});