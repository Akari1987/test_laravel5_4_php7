const state = {
    who: "You",
    activities: []
};

const getters = {
    activityLogs: state => {
        return state.activities;
    }
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

export default {
    state,
    actions,
    mutations,
    getters
}