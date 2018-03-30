const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

elixir(function (mix) {

    mix.browserify('/../../../app/Support/Resources/Views/js/main.js', 'app/Support/Resources/Views/js/VueComponents/main.js');

    mix.scripts([
        '/../../../node_modules/jquery/dist/jquery.min.js',
        '/../../../node_modules/bootstrap/dist/js/bootstrap.min.js',
        '/../../../node_modules/fancybox/dist/js/jquery.fancybox.js',
        '/../../../node_modules/sweetalert/dist/sweetalert.min.js',
        '/../../../node_modules/datatables/media/js/jquery.dataTables.min.js',
        '/../../../node_modules/moment/min/moment.min.js',
        '/../../../node_modules/ckeditor/ckeditor.js',
        '/../../../app/Support/Resources/Views/js/ .js',
        '/../../../app/Support/Resources/Views/js/momentjs.pt-br.js',
        '/../../../app/Support/Resources/Views/js/VueComponents/main.js',
        '/../../../node_modules/jquery-mask-plugin/dist/jquery.mask.min.js',
        '/../../../node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        '/../../../app/Support/Resources/Views/js/generic.js'
    ], 'public/js/app.js');

    mix.styles([
        '/../../../node_modules/bootstrap/dist/css/bootstrap.min.css',
        '/../../../node_modules/fancybox/dist/css/jquery.fancybox.css',
        '/../../../node_modules/font-awesome/css/font-awesome.css',
        '/../../../app/Support/Resources/Views/css/generic.css',
        '/../../../node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        '/../../../app/Units/Dashboard/Resources/css/sinoptico.css'
    ], 'public/css/app.css');

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
    mix.copy('node_modules/fancybox/dist/img', 'public/img');
    mix.copy('app/Units/Dashboard/Resources/css/images/', 'public/img');
});