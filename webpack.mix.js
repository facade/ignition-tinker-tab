const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix
    .setPublicPath('public')
    .js('resources/js/ignition-tinker-tab.js', 'public')
    .version();
