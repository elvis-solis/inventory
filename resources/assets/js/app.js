
 
require('./bootstrap');

window.Vue = require('vue');

/**
 * A continuación, crearemos una nueva instancia de la aplicación Vue y la adjuntaremos
 * a la página. Luego, puedes comenzar a agregar componentes a esta aplicación
 .
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#inventory'
});
