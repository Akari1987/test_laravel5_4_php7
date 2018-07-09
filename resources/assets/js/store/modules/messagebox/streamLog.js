// **Stock loaded stream logs from StreamGroupLatest.vue**

const state = {
    streamGroups: {},
    streamLogs: {logs: []},
    notifications: []
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
    },
    newMessageNotification({ commit }, payload) {
        commit('NEW_STREAM_MESSAGE_NOTIFICATION', payload);
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
    },
    NEW_STREAM_MESSAGE_NOTIFICATION(state, payload)
    {
        state.streamLogs.logs.push(payload)
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}