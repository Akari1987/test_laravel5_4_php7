<template>
    <div id="profile">
        <div class="wrapper wrapper-content">
            <div class="isLarge" v-if="isNotLarge == false">
                <app-profile-header></app-profile-header>
                <app-status-card></app-status-card>
                <div class="row animated fadeInRight">
                    <app-profile-left class="col-md-3"></app-profile-left>
                    <app-activity class="col-md-5"></app-activity>
                    <app-profile-right class="col-md-4"></app-profile-right>
                </div>
            </div>
            <div class="isNotLarge" v-if="isNotLarge == true" >
                
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import {mapActions} from 'vuex';
    
    import {getUserPicMixin} from '../../mixins/getUserPicMixin';
    import {displayMixin} from '../../mixins/displayMixin';
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    import ProfileHeader from './ProfileHeader.vue';
    import StatusCard from './StatusCard.vue';
    import ProfileLeft from './ProfileLeft.vue';
    import ProfileRight from './ProfileRight.vue';
    import Activity from './Activity.vue';
    
    export default {
        mixins: [getUserPicMixin, displayMixin],
        components: {
            'app-profile-header': ProfileHeader,
            'app-status-card': StatusCard,
            'app-profile-left': ProfileLeft,
            'app-profile-right': ProfileRight,
            'app-activity': Activity,
            
            InfiniteLoading
        },
        data() {
            return {
                status: "",
            }
        },
        created() {
            /* Get current user from URL */
            this.loadProfile(this.$route.params.id); // @getUserPicMixin.js
            axios.get('/check_relationship_status/' + this.$route.params.id).then(response => {
                this.status = response.data.status;
            });
        },
        methods: {
            ...mapActions({
                loadUser: 'loadUser',
                clearRecommends: 'clearRecommends'
            }),
        }
    }
</script>