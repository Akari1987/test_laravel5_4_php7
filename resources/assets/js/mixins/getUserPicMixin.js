/* GET user avatar, Auth User and Loaded user state management */

export const getUserPicMixin = {
    computed: {
        /* Get auth user */
        user() {
            return this.$store.state.user.user;
        },
        /* To get current user */
        loadedUser() {
            return this.$store.state.profile.loadedUser; 
        },
    },
    methods: {
        getUserPic(path) {
            var match = String(path).match(/http/);
            if(match)
            {
                return path;
            }
            else if(path == null)
            {
                return '/users/avatar/default.png';
            }
            else
            {
                return '/' + path;
            }
        },
        /* Get clicked user profile and passing data to loadUser action @profile.js */
        loadProfile(id) {
            axios.get("/user/info/" + id).then(response => {
                const user = response.data;
                this.loadUser(user);  // @profile.js
            });
            /* Clear previous state */
            this.clearRecommends();  // @recommend.js
        },
    }
}