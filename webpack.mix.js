const mix = require('laravel-mix');

mix.js('resources/js/width-fieldtype.js', 'dist/js')
    .vue({ version: 2 });
