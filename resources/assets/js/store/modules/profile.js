// const getters = {
//     loadedUsers(id_st) {
//         return state.loadedUser;
//     }
// };

// const actions = {
//     // from Follow.vue, UserRecommend.vue
//     loadUser({ commit }, user) {
//         commit('LOAD_USER', user);
//     }
// };

const state = {
    loadedUser: "",
    loadedUsers: []
};

const getters = {
    /* Get current user profile from URL @Profile.vue */
    loadedUser(state) {
        return (id) => {
            return state.loadedUsers.find((loadedUser) => {
                return loadedUser.id === id;
             });
        };
    },
};

const actions = {
    /* Add user to loadedUsers from profile.vue */
    loadUser({ commit }, user) {
        commit('LOAD_USER', user);
    }
};

const mutations = {
    'LOAD_USER' (state, user) {
        // state.loadedUsers.push(user);
        state.loadedUser = user;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
};