var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

var bower = './bower_components/';

var vendor = [
    bower + 'adminlte/plugins/jQuery/jQuery-2.2.0.min.js',
    bower + 'adminlte/bootstrap/js/bootstrap.min.js',
    bower + 'adminlte/plugins/datatables/jquery.dataTables.js',
    bower + 'adminlte/plugins/datatables/dataTables.bootstrap.js',
    bower + 'adminlte/plugins/datepicker/bootstrap-datepicker.js',
    bower + 'adminlte/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js',
    bower + 'adminlte/plugins/chartjs/Chart.min.js',
    bower + 'adminlte/plugins/iCheck/icheck.min.js',
    bower + 'sweetalert/dist/sweetalert.min.js',
    bower + 'lightbox2/dist/js/lightbox.min.js',
    bower + 'adminlte/dist/js/app.min.js',
];

elixir(function(mix) {
    mix.sass('app.scss');
    mix.imagemin();

    mix.scripts(vendor.concat([
        './resources/assets/js/**/*.js'
    ]), './public/js/app.js');

    mix.version([
        'css/app.css',
        'js/app.js',
    ]);
    mix.copy(bower + 'adminlte/bootstrap/fonts', './public/build/fonts/');
    mix.copy(bower + 'adminlte/plugins/datatables/images', './public/build/css/images');
    mix.copy(bower + 'lightbox2/dist/images', './public/build/images');
});
