import {mapGetters} from 'vuex';

const state = {
    user: {
        name: ""
    }    
};

const mutations = {
    'SET_USER' (state, user) {
        state.user.name = user;
    }
};

const actions = {
    setUser({ commit }, user) {
        commit('SET_USER', user);
    }
};

export default {
    state,
    actions,
    mutations,
    methods: {
        ...mapGetters({
            user: 'getters'
        })
    }
};