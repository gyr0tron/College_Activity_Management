import VueRouter from 'vue-router'

window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

// Vue
window.Vue = require('vue');

// Vue Router
import router from './router';

// Vue Store
import store from './store';

// Element UI
import Element from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(Element);
const app = new Vue({
    el: '#app',
    router,
    store
});
