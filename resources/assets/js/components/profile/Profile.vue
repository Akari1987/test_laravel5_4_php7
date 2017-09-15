<template>
    <div id="profile">
        <div class="wrapper wrapper-content">
            <app-profile-header></app-profile-header>
            <app-status-card></app-status-card>
            <div class="row animated fadeInRight">
                <app-profile-left class="col-md-3"></app-profile-left>
                <app-activity class="col-md-5"></app-activity>
                <app-profile-right class="col-md-4"></app-profile-right>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import {mapActions} from 'vuex';
    import {getUserPicMixin} from '../../mixins/getUserPicMixin';
    
    import ProfileHeader from './ProfileHeader.vue';
    import StatusCard from './StatusCard.vue';
    import ProfileLeft from './ProfileLeft.vue';
    import ProfileRight from './ProfileRight.vue';
    import Activity from './Activity.vue';
    
    export default {
        mixins: [getUserPicMixin],
        components: {
            'app-profile-header': ProfileHeader,
            'app-status-card': StatusCard,
            'app-profile-left': ProfileLeft,
            'app-profile-right': ProfileRight,
            'app-activity': Activity,
        },
        data() {
            return {
                status: "",
            }
        },
        // computed: {
        //     loadedUser() {
        //     // return this.$store.state.profile.loadedUser;
        //     // return this.$store.getters.loadedUser(this.$route.params.id);
        //         return this.$store.getters.loadedUser(this.$route.params.id);
        //     }, 
        // },
        created() {
            /* Get current user from URL */
            this.loadProfile(this.$route.params.id); // @getUserPicMixin.js
            // axios.get("/user/info/" + this.$route.params.id).then(response => {
            //     const user = response.data;
            //     console.log(response);
            //     this.loadUser(user);
            // });
            axios.get('/check_relationship_status/' + this.$route.params.id).then(response => {
                this.status = response.data.status;
            });
        },
        methods: {
            ...mapActions({
                loadUser: 'loadUser'
            }),
        }
    }
</script>