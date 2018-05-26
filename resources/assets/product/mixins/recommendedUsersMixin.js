export const recommendedUsersMixin = {
    computed: {
        list() {
            return this.$store.state.recommend.recommendedUsers;
        }
    }
}