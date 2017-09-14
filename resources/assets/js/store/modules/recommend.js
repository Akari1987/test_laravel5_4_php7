const state = {
    recommends: "",
}

const actions = {
    loadRecommends({commit}, recommends) {
        commit('LOAD_RECOMMENDS', recommends);
    }
}

const mutations = {
    'LOAD_RECOMMENDS' (state, recommends) {
        state.recommends = recommends;
    }
}

export default {
    state,
    actions,
    mutations
}