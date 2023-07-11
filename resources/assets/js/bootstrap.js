// Carga la biblioteca lodash y asigna su referencia a la variable global "_"
window._ = require('lodash');

/**
 * Cargaremos jQuery y el complemento jQuery de Bootstrap que proporciona soporte
 * para funciones de Bootstrap basadas en JavaScript, como modales y pestañas. Este
 * código puede modificarse para adaptarse a las necesidades específicas de tu aplicación.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

/**
 * Cargaremos la biblioteca axios que nos permite realizar fácilmente solicitudes HTTP
 * a nuestro backend de Laravel. Esta biblioteca maneja automáticamente el envío del
 * token CSRF como encabezado en función del valor de la cookie de token "XSRF".
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * A continuación, registraremos el token CSRF como un encabezado común en Axios para que
 * todas las solicitudes HTTP salientes lo tengan adjunto automáticamente. Esto es solo
 * una conveniencia simple para no tener que adjuntar manualmente cada token.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo expone una API expresiva para suscribirse a canales y escuchar
 * eventos que son transmitidos por Laravel. Echo y la transmisión de eventos
 * permiten a tu equipo construir fácilmente aplicaciones web en tiempo real robustas.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });
