import Vue from 'vue';
import Vuex from 'vuex';

import user from './modules/user.js';
import activity from './modules/activity.js';
import stream from './modules/stream.js';

Vue.use(Vuex);

// const getters = {
//     user: state => {
//         return state.user;
//     }
// };

export default new Vuex.Store({
    //state,
    //getters,
    modules: {
        user,
        activity,
        stream
    }
});