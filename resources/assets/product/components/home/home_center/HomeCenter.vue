<template>
    <div class="home-center">
        <app-new-entry></app-new-entry>
        <app-feed></app-feed>
    </div>
</template>

<script>
    import NewEntry from './NewEntry.vue';
    import Feed from './Feed.vue';
    
    export default {
        components: {
            'app-new-entry': NewEntry,
            'app-feed': Feed
        }
    }
</script>