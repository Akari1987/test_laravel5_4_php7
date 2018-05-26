<template>
    <div class="profile-left">
        <app-profile-detail></app-profile-detail>
        <app-user-recommendation></app-user-recommendation>
    </div>
</template>

<script>
    import ProfileDetail from './ProfileDetail.vue';
    import UserRecommendation from '../relationships/UserRecommendation.vue';
    
    export default {
        components: {
            'app-profile-detail': ProfileDetail,
            'app-user-recommendation': UserRecommendation
        }
    }
</script>

<style type="text/css">
    .profile-left {
        padding-right: 0px;
    }
</style>