var elixir = require('laravel-elixir');
require('laravel-elixir-sass-compass');

var inputJSDir = 'resources/assets/js',
    inputSASSDir = 'resources/assets/sass/',
    outputCSS = 'public/assets/css',
    inputCSS = 'resources/assets/css',
    outputJS = 'public/assets/js/';

elixir(function(mix) {
    mix.compass('app.scss', inputCSS, {
            sass: inputSASSDir
        })
        .styles([
            'bootstrap.min.css',
            'small-business.css',
            'app.css',
        ], outputCSS + '/all.css', inputCSS)
        .scripts([
            'jquery.js',
            'bootstrap.min.js',
            'app.js'
        ], outputJS + 'app.js', inputJSDir)
        .version([
            outputCSS + '/all.css',
            outputJS + '/app.js'
        ]);
});
