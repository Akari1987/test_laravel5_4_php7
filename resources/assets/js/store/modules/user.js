/* Get and set auth user data */

import {mapGetters} from 'vuex';

const state = {
    user: {},
    userDetail: {}
};

const getters = {
    getUser: state => {
        return state.user;
    },
    getUserDetail: state => {
        return state.userDetail;
    }
}

const actions = {
    /* from Sidenavbar.vue and Edit.vue */
    user_setUser({ commit }, user) {
        commit('SET_USER', user);
    },
    /* from ProfileDetail.vue */
    user_setUserDetail({ commit }, userDetail) {
        commit('SET_USER_DETAIL', userDetail);    
    },
    
    editMode({ commit }) {
        commit('EDIT_MODE');
    },
};

const mutations = {
    'SET_USER' (state, user) {
        state.user = user;
    },
    'SET_USER_DETAIL' (state, userDetail) {
        state.userDetail = userDetail;
    }
};

export const userMixin = {
    data() {
        editable: false
    },
    methods: {
        editUser() {
            this.editable = true;   
        }
    }
}

export default {
    // namespace: true,
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