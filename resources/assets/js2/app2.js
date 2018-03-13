
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../js/bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Example from './components/Example.vue';

// import routes from './routes';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

Vue.component('example', require('./components/Example.vue').default);
Vue.component('page-body', require('./components/PageBody.vue').default);

const routes = [
    { path: 'testMongo', component: Example },
    { path: '/user/1', redirect: '/user1'}
]

const router = new VueRouter({
    // mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router
});