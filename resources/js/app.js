
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import axios from 'axios';
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('nav-bar', require('./components/NavBar.vue'));
Vue.component('nav-bar-admin', require('./components/NavBarAdmin.vue'));
Vue.component('landing', require('./components/Landing.vue'));
Vue.component('services', require('./components/Services.vue'));
Vue.component('pagos', require('./components/Pagos.vue'));
Vue.use(BootstrapVue);


const app = new Vue({
    el: '#app'
});
