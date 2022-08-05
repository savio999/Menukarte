/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './scss/all.scss';

// start the Stimulus application
import './bootstrap';

//require jQuery
const $ = require('jquery');

// create global $ and jQuery variables
 global.$ = global.jQuery = $;

 require('bootstrap');

 require('@fortawesome/fontawesome-free/css/all.min.css');
 require('@fortawesome/fontawesome-free/js/all.js');

 import './js/jquery.slicknav.min.js';
 import './js/owl.carousel.min.js';
 import './js/mixitup.min.js';
 import './js/main.js';

