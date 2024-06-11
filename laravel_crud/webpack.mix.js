const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/mdbootstrap/css/mdb.min.css', 'public/css/mdb.min.css');
mix.copy('node_modules/mdbootstrap/js/mdb.min.js', 'public/js/mdb.min.js');
