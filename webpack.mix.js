/*----- Webpack compiler ------ */
const mix = require('laravel-mix');

/* SCSS */
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/site.scss', 'wp-content/themes/clinicoeurs/public/css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/services/main.scss', 'wp-content/themes/clinicoeurs/public/css/services.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/volunteers/main.scss', 'wp-content/themes/clinicoeurs/public/css/volunteers.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/news/main.scss', 'wp-content/themes/clinicoeurs/public/css/news.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/donations/main.scss', 'wp-content/themes/clinicoeurs/public/css/donations.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/contact/main.scss', 'wp-content/themes/clinicoeurs/public/css/contact.css');
mix.sass('wp-content/themes/clinicoeurs/ressources/sass/legal-notice/main.scss', 'wp-content/themes/clinicoeurs/public/css/legal-notice.css');

/* JS */
mix.js('wp-content/themes/clinicoeurs/ressources/js/site.js', 'wp-content/themes/clinicoeurs/public/js');
mix.js('wp-content/themes/clinicoeurs/ressources/js/services.js', 'wp-content/themes/clinicoeurs/public/js/services.js');
mix.js('wp-content/themes/clinicoeurs/ressources/js/form.js', 'wp-content/themes/clinicoeurs/public/js/form.js');