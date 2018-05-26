const state = {
    friends: ""
};

const actions = {
    loadFriends({commit}, friends) {
        commit('LOAD_FRIENDS', friends);
    }
};

const mutations = {
    'LOAD_FRIENDS' (state, friends) {
        state.friends = friends;
    }
};

export default {
    state,
    actions,
    mutations
};