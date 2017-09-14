const state = {
   follows: "",
   followers: "",
};

const actions = {
    setFollows({commit}, follows) {
        commit('SET_FOLLOWS', follows); 
    }
};

const mutations = {
    'SET_FOLLOWS' (state, follows) {
        state.follows = follows;
    }
};

export default {
    state,
    actions,
    mutations
};