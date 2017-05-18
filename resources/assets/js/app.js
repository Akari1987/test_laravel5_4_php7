
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
//import VueHtmlEditor from 'vue-html-editor';
import store from './store/store';

import Profile from './components/profile/Profile.vue';
import Follows from './components/profile/Follows.vue';
import Activity from './components/profile/Activity.vue';
import Example from './components/Example.vue';
import Stream from './components/sidenavbar/streambox/stream/Stream.vue';
import Member from './components/sidenavbar/streambox/member/Members.vue';
import Email from './components/sidenavbar/streambox/email/Email.vue';
import Streamboxnavbar from './components/sidenavbar/streambox/Streamboxnavbar.vue';

//import Summernote from 'summernote';

Vue.use(VueRouter);
//Vue.use(VueHtmlEditor);
//Vue.use(Summernote);

Vue.component('example', require('./components/Example.vue'));

Vue.component('sidenavbar', require('./components/sidenavbar/Sidenavbar.vue'));
Vue.component('streambox', require('./components/sidenavbar/streambox/Streambox.vue'));
//Vue.component('stream', require('./components/sidenavbar/streambox/stream/Stream.vue'));
//Vue.component('email', require('./components/sidenavbar/streambox/email/Email.vue'));
Vue.component('app-vue-html-editor', require('vue-html-editor'));
//Vue.component('streamboxnavbar', require('./components/sidenavbar/streambox/Streamboxnavbar.vue'));

const routes = [
    { path: '/profile', component: Profile,
        children: [
            {
                path: '/follow', component: Follows,    
            },
            {
                path: '/activity', component: Activity
            }    
        ]
    },
    { path: '/example', component: Example},
    { path: '/stream', components: { default: Stream,
                                     streamboxnavbar: Streamboxnavbar}
    },
    { path: '/member', components: { default: Member,
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
    router: router,
});