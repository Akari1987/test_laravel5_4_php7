<template>
    <div id="profile">
        <div class="wrapper wrapper-content">
            <app-profile-header></app-profile-header>
            <div class="row animated fadeInRight">
                <app-profile-left class="col-md-3"></app-profile-left>
                <!--<router-view class="col-md-5"></router-view>-->
                <app-activity class="col-md-5"></app-activity>
                <app-profile-right class="col-md-4"></app-profile-right>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    
    import ProfileHeader from './ProfileHeader.vue';
    import ProfileLeft from './ProfileLeft.vue';
    import ProfileRight from './ProfileRight.vue';
    import ProfileDetail from './ProfileDetail.vue';
    import Activity from './Activity.vue';
    import Follows from './Follows.vue';
    
    export default {
        components: {
            'app-profile-header': ProfileHeader,
            'app-profile-left': ProfileLeft,
            'app-profile-right': ProfileRight,
            'app-profile-detail': ProfileDetail,
            'app-activity': Activity,
            'app-follows': Follows,
        },
    }
</script>