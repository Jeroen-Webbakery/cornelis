let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.setPublicPath('./')


// Account
mix.js('js/cornelis.js', 'js/cornelis.min.js')
    .sass('sass/cornelis/cornelis.scss', 'css/cornelis.min.css')
    .options({
        processCssUrls: false,
    });

// Version the files
if (mix.inProduction()) {
    mix.setPublicPath(`./`);
    mix.version([
        'js/cornelis.min.js',
        'css/cornelis.min.css',
    ]);
}


