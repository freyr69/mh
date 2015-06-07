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

elixir(function(mix) {
    var bowerPath = "bower_components";

    mix.sass(
        [
            "style.scss"
        ],
        "public/css",
        {
            includePaths: [
                bowerPath + "/foundation/scss"
            ]
        }
    )
    .scripts(
        [
            "../" + bowerPath + "/jquery/dist/jquery.js",
            "../" + bowerPath + "/fastclick/lib/fastclick.js",
            "../" + bowerPath + "/jquery.cookie/jquery.cookie.js",
            "../" + bowerPath + "/foundation/js/foundation.js",
            "app.js"
        ],
        "public/js/app.js"
    ).scripts(
        [
            "../" + bowerPath + "/modernizr/modernizr.js"
        ],
        "public/js/modernizr.js"
    );
    /*
    .styles(
        [
            "style.css"
        ],
        "public/css/style.css",
        "public/css"
    );
    */
});
