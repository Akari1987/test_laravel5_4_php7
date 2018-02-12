/* Compare state.user and computed loadedUser */

export const isMeMixin = {
    computed: {
        /* To get current user */
        loadedUser() {
            return this.$store.state.profile.loadedUser; 
        },
        /* Compare current user and auth user */
        isMe() {
            if(this.$store.state.user.user.id === this.loadedUser.id)
            {
                return true;
            }
            else {
                return false;
            }
        }
    }
}