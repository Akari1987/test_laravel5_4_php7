import {mapGetters} from 'vuex';

const state = {
    user: {
        //name: ""
    }    
};

const getters = {
    getUser: state => {
        return state.user;
    }
}

const actions = {
    // from sidenavbar.vue
    setUser({ commit }, user) {
        commit('SET_USER', user);
    }
};

const mutations = {
    'SET_USER' (state, user) {
        //state.user.name = user;
        state.user = user;
    }
};

export default {
    state,
    getters,
    actions,
    mutations,
    methods: {
        ...mapGetters({
            user: 'getters'
        })
    }
};