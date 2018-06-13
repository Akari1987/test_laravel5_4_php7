// **Stock loaded users data for messagebox**

const state = {
    messageboxUsers: {}
};

const getters = {
    getUsers: state => {
        return state.users;
    }
}

const actions = {
    setMessageboxUsers({ commit }, payload) {
        commit('SET_MESSAGEBOX_USERS', payload);
    }
}

const mutations = {
    SET_MESSAGEBOX_USERS: (state, payload) => {
        state.messageboxUsers = payload
    }
}

export default {
    state,
    getters,
    mutations,
    actions
}