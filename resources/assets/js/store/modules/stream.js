const state = {
    streamId: 0,
    messages: []
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
    sendMessage({ commit }, message) {
        commit('SEND_MESSAGE', message);
    }
};

const getters = {
    messageLogs: state => {
        return state.messages;
    },
    streamId: state => {
        return state.streamId;
    }
};

export default {
    state,
    actions,
    mutations,
    getters
}