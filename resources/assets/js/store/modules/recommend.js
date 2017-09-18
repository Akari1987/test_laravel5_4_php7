const state = {
    recommendedUsers: [],
}

const actions = {
    clearRecommends({commit}) {
       commit('CLEAR_RECOMMENDS'); 
    },
    loadRecommends({commit}, recommends) {
        commit('LOAD_RECOMMENDS', recommends);
    }
}

const mutations = {
    'CLEAR_RECOMMENDS' (state) {
       state.recommendedUsers = []; 
    },
    'LOAD_RECOMMENDS' (state, recommends) {
        state.recommendedUsers = state.recommendedUsers.concat(recommends);
    }
}

export default {
    state,
    actions,
    mutations
}