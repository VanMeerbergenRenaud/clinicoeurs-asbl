const mix = require('laravel-mix');
// require('mix-white-sass-icons');

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

// if(process.env.BUILD_ICONS) {
//    return mix.icons('ressources/icons', 'ressources/fonts')
// }

/* SCSS part */
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/site.scss', 'wp-content/themes/clinicoeurs/public/css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/services/main.scss', 'wp-content/themes/clinicoeurs/public/css/services.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/volunteers/main.scss', 'wp-content/themes/clinicoeurs/public/css/volunteers.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/contact/main.scss', 'wp-content/themes/clinicoeurs/public/css/contact.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/donations/main.scss', 'wp-content/themes/clinicoeurs/public/css/donations.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/actualities/main.scss', 'wp-content/themes/clinicoeurs/public/css/actualities.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/confidentiality/main.scss', 'wp-content/themes/clinicoeurs/public/css/confidentiality.css');
/* JS part */
mix.js('wp-content/themes/clinicoeurs/ressources/js/site.js', 'wp-content/themes/clinicoeurs/public/js');
mix.js('wp-content/themes/clinicoeurs/ressources/js/form.js', 'wp-content/themes/clinicoeurs/public/js/form.js');
