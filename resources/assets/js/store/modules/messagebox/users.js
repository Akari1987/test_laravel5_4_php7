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
    setUsers({ commit }, payload) {
        commit('SET_USERS', payload);
    }
}

const mutations = {
    SET_USERS: (state, payload) => {
        state.messageboxUsers = payload
    }
}

export default {
    state,
    getters,
    mutations,
    actions
}