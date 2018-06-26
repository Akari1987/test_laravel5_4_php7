// **Stock loaded stream logs from StreamGroupLatest.vue**

const state = {
    streamGroups: {},
    streamLogs: {logs: {}},
    // streamGroupUsers: {}
}

const getters = {
    getCurrentStreamGroup: state => {
        return state.streamLogs.groupId;
    },
    getStreamGroups: state => {
        return state.streamGroups;
    },
    getStreamLogs: state => {
        return state.streamLogs;
    },
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
    SET_STREAM_GROUP_USERS: (state, payload) => {
        state.streamGroupUsers = payload
    },
    SET_STREAM_GROUPS: (state, payload) => {
        state.streamGroups = payload
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}