const state = {
    streamId: 0,
    messages: []
};

const getters = {
    messageLogs: state => {
        return state.messages;
    },
    streamId: state => {
        return state.streamId;
    }
};

const mutations = {
    'SEND_MESSAGE' (state, {messageText, user, avatar}) {
        state.messages.push({
            message: messageText,
            user: user,
            avatar: avatar
        });
    }
};

const actions = {
    stream_sendMessage({ commit }, message) {
        commit('SEND_MESSAGE', message);
    }
};

export default {
    state,
    actions,
    mutations,
    getters
}