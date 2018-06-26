/* To load or reload messageboxStreamLogs */

export const loadGroupMessagesMixin = {
    methods: {
        loadGroupMessages($groupId) {
            // **load clicked messageGroup**
                axios.get('/getGroupStreamMessages', {params: {
                    id: $groupId
                }}).then(response => {
                    const payload = {};
                    payload['groupId'] = $groupId;
                    payload['logs'] = response.data;
                    this.$store.commit('SET_STREAM_LOGS', payload);
                });
        }
    }
}