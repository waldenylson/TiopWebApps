let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')

    .extract([
        'vue', 'jquery','sweetalert',
    ])

    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/fancybox/dist/js/jquery.fancybox.js',
        'node_modules/sweetalert/dist/sweetalert.min.js',
        'node_modules/datatables/media/js/jquery.dataTables.min.js',
        'node_modules/moment/min/moment.min.js',
        'app/Support/Resources/Views/js/momentjs.pt-br.js',
        'node_modules/jquery-mask-plugin/dist/jquery.mask.min.js',
        'node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        'app/Support/Resources/Views/js/generic.js'
    ], 'public/js/tiop.js')

    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/fancybox/dist/css/jquery.fancybox.css',
        'node_modules/font-awesome/css/font-awesome.css',
        'app/Support/Resources/Views/css/generic.css',
        'app/Support/Resources/Views/css/relogio.css',
        'node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ], 'public/css/tiop.css')

    .styles([
        'app/Units/Dashboard/Resources/css/sinoptico.css'
    ], 'public/css/sinoptico.css')

    .copy('node_modules/font-awesome/fonts', 'public/fonts')
    .copy('node_modules/bootstrap/fonts', 'public/fonts')
    .copy('node_modules/fancybox/dist/img', 'public/img')
    .copy('app/Units/Dashboard/Resources/css/images/', 'public/img')

    .version();


