
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
// var mongoose = require('mongoose');
// mongoose.connect('https://test-laravel5-4-php7-akariozora.c9users.io/:27017/messages');

require('./plugins/auto-hiding-navigation/auto-hiding-navigation');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueRouter from 'vue-router';

import VueSocketIo from 'vue-socket.io';
import Socket from 'socket.io-client';

import Vuetify from 'vuetify';
import VueAwesomeSwiper from 'vue-awesome-swiper';
import VueCoreImageUpload  from 'vue-core-image-upload';
import VueScrollTO from "vue-scrollto";
// import Password from 'vue-password-strength-meter'

import store from './store/store';

import Profile from './components/profile/Profile.vue';
import Follows from './components/relationships/Follows.vue';
import Activity from './components/profile/Activity.vue';

import Home from './components/home/Home.vue';

import MessageBox from './components/messagebox/MessageBoxBody.vue';
import Stream from './components/messagebox/stream/Stream.vue';
import Member from './components/messagebox/member/Members.vue';
import Email from './components/messagebox/email/Email.vue';

Vue.use(VueRouter);

let sck = Socket('https://test-laravel5-4-php7-akariozora.c9users.io:8081', {
    reconnection: true,
    reconnectionDeray: 500,
    reconnectionAttempts: 5,
});

Vue.use(VueSocketIo, sck);

Vue.use(Vuetify);
Vue.use(VueAwesomeSwiper);
Vue.use(VueCoreImageUpload);
Vue.use(VueScrollTO);
// Vue.component('example', require('./components/Example.vue').default);
Vue.component('vuetify', require('./components/Vuetify.vue').default);
Vue.component('notification', require('./components/modules/Notification.vue').default);
Vue.component('topnavbar', require('./components/topnavbar/Topnavbar.vue').default);
Vue.component('large-sidenavbar', require('./components/sidenavbar/LargeSidenavbar.vue').default);
Vue.component('page-body', require('./components/PageBody.vue').default);
Vue.component('top-nav-bar', require('./components/modules/TopNavBar.vue').default);
Vue.component('feed', require('./components/home/home_center/Feed.vue').deafault);
Vue.component('home-center', require('./components/home/home_center/HomeCenter.vue').default);
Vue.component('profile-detail', require('./components/profile/ProfileDetail.vue').default);
Vue.component('sidenavbar', require('./components/sidenavbar/Sidenavbar.vue').default);
//Vue.component('app-vue-html-editor', require('vue-html-editor'));
// Vue.component('SweetModal');
// Vue.component('SweetModalTab');

const routes = [
    { path: '/user/:id',
        component: Profile,
            children: [
                { path: '', component: Activity },
                { path: 'follow', component: Follows },
                { path: 'activity', component: Activity }    
            ]
    },
    
    { path: '/home', component: Profile },
    
    { path: '/messagebox', 
        component: MessageBox,
            children: [
                { path: 'stream', component: Stream },
                { path: 'member', component: Member },
                { path: 'email', component: Email }
            ]
    },
    
    { path: '/member', components: { default: Member}
    },
    { path: '/email', components: { default: Email}
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


/*------------------ 
|  For Edit Mode
-------------------*/

// Init Edit Mode
$(".editMode").click(function() {
    $("#wrapper").css({'z-index': 0}, {'postion': 'relative'});
    $("#editingOverlay").css({'z-index': 2002}).show();
    $(".navbar-default").css({"z-index": 0});
    $('.editable').css({'z-index': 2});
    $('.editable').addClass('editing');
});

// remove Edit Mode
$(".removeEdit").click(function() {
    $("#editingOverlay").hide();
    $(".navbar-default").css({"z-index": 2400});
    $('.editable').removeClass('editing');
});

// hover action
//$('imag.editable').hover
