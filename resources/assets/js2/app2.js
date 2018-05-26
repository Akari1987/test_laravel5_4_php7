
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../js/bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// import Example from './components/Example.vue';

/* Http controll */
import routes from './routes';
import VueRouter from 'vue-router';
import Axios from 'axios';

/* Store state management */
import store from '../js/store/store';

/* UI Package*/
import SuiVue from 'semantic-ui-vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

Vue.use(VueRouter);
Vue.use(Axios);
Vue.use(SuiVue);
Vue.use(Vuetify);

Vue.component('example', require('./components/Example.vue').default);
Vue.component('page-body', require('./components/PageBody.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    store,
    router: router
});