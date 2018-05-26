<template>
    <div class="profile-right">
        <app-friends></app-friends>  
        <app-follows></app-follows>
    </div>
</template>

<script>
    import Friends from '../relationships/Friends.vue';
    import Follows from '../relationships/Follows.vue';
    
    export default {
        components: {
            'app-follows': Follows,
            'app-friends': Friends
        }
    }
</script>

<style type="text/css">
    .profile-right {
        padding-left: 0;
    }
</style>