
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.$ = window.jQuery = require('jquery');
window.Laravel = { csrfToken: $('meta[name=csrf-token]').attr("content") };
require('./bootstrap');
require('./plugins/auto-hiding-navigation/auto-hiding-navigation');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import VueAwesomeSwiper from 'vue-awesome-swiper';
import VueCoreImageUpload  from 'vue-core-image-upload';
// import Password from 'vue-password-strength-meter'

import store from './store/store';

import Profile from './components/profile/Profile.vue';
import Follows from './components/profile/Follows.vue';
import Activity from './components/profile/Activity.vue';

import Home from './components/home/Home.vue';

import Stream from './components/sidenavbar/streambox/stream/Stream.vue';
import Member from './components/sidenavbar/streambox/member/Members.vue';
import Email from './components/sidenavbar/streambox/email/Email.vue';
import Streamboxnavbar from './components/sidenavbar/streambox/Streamboxnavbar.vue';

Vue.use(VueRouter);
Vue.use(VueAwesomeSwiper);
Vue.use(VueCoreImageUpload);
Vue.use(Vuetify);

Vue.component('example', require('./components/Example.vue'));
Vue.component('vuetify', require('./components/Vuetify.vue'));
Vue.component('topnavbar', require('./components/topnavbar/Topnavbar.vue'));
Vue.component('large-sidenavbar', require('./components/sidenavbar/LargeSidenavbar.vue'));
Vue.component('page-body', require('./components/PageBody.vue'));
Vue.component('top-nav-bar', require('./components/modules/TopNavBar.vue'));
Vue.component('feed', require('./components/home/home_center/Feed.vue'));
Vue.component('home-center', require('./components/home/home_center/HomeCenter.vue'));
Vue.component('profile-detail', require('./components/profile/ProfileDetail.vue'));

Vue.component('sidenavbar', require('./components/sidenavbar/Sidenavbar.vue'));
//Vue.component('app-vue-html-editor', require('vue-html-editor'));



const routes = [
    { path: '/user/:userName', component: Profile,
        children: [
            {
                path: '', component: Activity,
            },
            
            {
                path: 'follow', component: Follows    
            },
            
            {
                path: 'activity', component: Activity
            }    
        ]
    },
    
    { path: '/home', component: Profile },
    
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
