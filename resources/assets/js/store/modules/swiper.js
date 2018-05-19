const state = { pageBodySwiper: {} };

const getters = {
    pageBodySwiper: state => {
        return state.swiper;
    }
};

const mutations = {
    'SET_SWIPER' (state, swiper) {
        state.pageBodySwiper = swiper;
    },
    'testFunc2' (state, swiper) {
        console.log(swiper);
    } 
};

const actions = {
    /* from PageBody.vue */
    swiper_setSwiper({ commit }, swiper) {
        commit('SET_SWIPER', swiper);
    },
    testFunc2({ commit }, swiper) {
        commit('testFunc2', 'testtest');
    }
};

export default {
    state,
    getters,
    mutations,
    actions
}




