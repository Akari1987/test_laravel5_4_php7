// **Stock loaded stream logs from StreamGroupLatest.vue**

const state = {
    streamLatests: [],
    streamGroups: {},
    streamLogs: {logs: []},
    notifications: [],
    // streamGroupUsers: {}
}

const getters = {
    getStreamLatests: state => {
        return state.streamLatests;
    },
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
    setStreamLatest({ commit }, payload) {
        commit('SET_STREAM_LATEST', payload);
    },
    setStreamLogs({ commit }, payload) {
        commit('SET_STREAM_LOGS', payload);
    },
    newMessageNotification({ commit }, payload) {
        commit('NEW_STREAM_MESSAGE_NOTIFICATION', payload);
    }
}

const mutations = {
    SET_STREAM_LATEST(state, payload)
    {
        state.streamLatests = payload
    },
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
        const groupId = state.streamLogs.groupId;
        let result = null;
        for(var i=0; i < state.streamLatests.length; i++)
        {
            if(state.streamLatests[i].group._id === groupId)
            {
                state.streamLatests[i].latestMessage = payload;
                result = 1
            }
            if(result) {
                break;
            }
        }
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}