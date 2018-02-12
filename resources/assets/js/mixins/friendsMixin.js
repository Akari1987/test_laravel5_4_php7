export const friendsMixin = {
    computed: {
        lists() {
            return this.$store.state.friends.friends;
        }
    }
}