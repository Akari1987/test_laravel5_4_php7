const state = {
    who: "You",
    activities: []
};

const mutations = {
    'SEND_ACTIVITY' (state, {who, activity}) {
        state.activities.push({
            who: who,
            activity: activity
        });
    }
};

const actions = {
    sendActivity({ commit }, activity) {
        commit('SEND_ACTIVITY', activity);
    }
};

const getters = {
    activityLogs: state => {
        return state.activities;
    }
};

export default {
    state,
    actions,
    mutations,
    getters
}