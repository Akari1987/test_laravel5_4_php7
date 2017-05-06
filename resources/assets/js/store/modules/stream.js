const state = {
    streamGroup: [],
    messages: [
        {
        message: 'hey!        --demo',
        user: "あかり"
        },
        {
        message: 'oops!        --demo',
        user: "なぎさ"
        }
    ]
};

const mutations = {
    'SEND_MESSAGE' (state, {messageText, user}) {
        state.messages.push({
            message: messageText,
            user: user
        });
    }
};

const actions = {
    sendMessage({ commit }, message) {
        commit('SEND_MESSAGE', message);
    }
};

const getters = {
    // messageLogs (state, getters) {
    //     return state.messages.map(message => {
    //         return {
    //             message: message.message,
    //             user: message.user,
    //         }
    //     });
    // }
    messageLogs: state => {
        return state.messages
    }
};

export default {
    state,
    actions,
    mutations,
    getters
}