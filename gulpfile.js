var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
 elixir(function(mix) {
 mix.less('app.less');
 });
 */

elixir(function (mix) {
    var bowerPath = "bower_components";

    mix.less(
        "main.less"
    ).scripts(
        [
            "../" + bowerPath + "/jquery/dist/jquery.js",
            "../" + bowerPath + "/bootstrap/dist/js/bootstrap.js",
            "../" + bowerPath + "/jquery.nicescroll//jquery.nicescroll.js",
            "../" + bowerPath + "/waves/dist/waves.js",
            "../" + bowerPath + "/bootstrap-growl/jquery.bootstrap-growl.js",
            "../" + bowerPath + "/sweetalert/dist/sweetalert.min.js",
            "app.js"
        ],
        "public/js/app.js"
    ).styles(
        [
            'resources/assets/bower_components/animate.css/animate.css',
            'resources/assets/bower_components/sweetalert/dist/sweetalert.css',
            'resources/assets/bower_components/waves/dist/waves.min.css',
            'public/css/main.css'
        ], 'public/css/app.css', './'
    ).version(
        'public/css/app.css'
    ).scripts(
        [
            "../" + bowerPath + "/modernizr/modernizr.js"
        ],
        "public/js/modernizr.js"
    );

});
