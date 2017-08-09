<template>
    <div class="profileLeft">
        <app-friends></app-friends>  
        <app-follows></app-follows>
    </div>
</template>

<script>
    import Friends from './Friends.vue';
    import Follows from './Follows.vue';
    
    export default {
        components: {
            'app-follows': Follows,
            'app-friends': Friends
        }
    }
</script>