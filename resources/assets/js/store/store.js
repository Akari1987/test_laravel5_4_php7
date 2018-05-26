import Vue from 'vue';
import Vuex from 'vuex';

import activity from './modules/activity.js';
import friends from './modules/friends.js';
import follows from './modules/follows.js';
import profile from './modules/profile.js';
import recommend from './modules/recommend.js';
import stream from './modules/stream.js';
import swiper from './modules/swiper.js';
import user from './modules/user.js';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        activity,
        friends,
        follows,
        profile,
        recommend,
        stream,
        swiper,
        user,
    }
});