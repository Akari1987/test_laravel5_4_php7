
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.$ = window.jQuery = require('jquery');
window.Laravel = { csrfToken: $('meta[name=csrf-token]').attr("content") };
require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueRouter from 'vue-router';
//import Jquery from 'jquery';
import store from './store/store';


import Example from './components/Example.vue';
import Stream from './components/sidenavbar/streambox/stream/Stream.vue';
import Email from './components/sidenavbar/streambox/email/Email.vue';
import Streamboxnavbar from './components/sidenavbar/streambox/Streamboxnavbar.vue';


Vue.use(VueRouter);
//Vue.use(Jquery);

Vue.component('example', require('./components/Example.vue'));

Vue.component('sidenavbar', require('./components/sidenavbar/Sidenavbar.vue'));
Vue.component('streambox', require('./components/sidenavbar/streambox/Streambox.vue'));
//Vue.component('stream', require('./components/sidenavbar/streambox/stream/Stream.vue'));
//Vue.component('email', require('./components/sidenavbar/streambox/email/Email.vue'));

//Vue.component('streamboxnavbar', require('./components/sidenavbar/streambox/Streamboxnavbar.vue'));

const routes = [
    { path: '/example', component: Example},
    { path: '/stream', components: { default: Stream,
                                     streamboxnavbar: Streamboxnavbar}
    },
    { path: '/email', components: { default: Email,
                                    streamboxnavbar: Streamboxnavbar}
    },
];

const router = new VueRouter({
   mode: 'history',
   routes: routes
});

const app = new Vue({
    el: '#app',
    store,
    router: router,/*
    created() {
            axios.get('/user').then(response => {
                console.log(response);
            });
    }*/
});