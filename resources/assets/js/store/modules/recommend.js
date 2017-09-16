const state = {
    recommendedUsers: [],
}

const actions = {
    loadRecommends({commit}, recommends) {
        commit('LOAD_RECOMMENDS', recommends);
    }
}

const mutations = {
    'LOAD_RECOMMENDS' (state, recommends) {
        state.recommendedUsers = state.recommendedUsers.concat(recommends);
    }
}

export default {
    state,
    actions,
    mutations
}