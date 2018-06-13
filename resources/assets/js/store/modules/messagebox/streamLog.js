// **Stock loaded stream logs from StreamGroupLatest.vue**

const state = {
    streamLogs: {},
}

const getters = {
    getStreamLogs: state => {
        return state.streamLogs;
    }
}

const actions = {
    setStreamLogs({ commit }, payload) {
        commit('SET_STREAM_LOGS', payload);
    }
}

const mutations = {
    SET_STREAM_LOGS: (state, payload) => {
        state.streamLogs = payload
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}