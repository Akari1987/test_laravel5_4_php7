<template>
    <div class="topnavbar">
        <header class="cd-auto-hide-header">
        	<app-primary></app-primary>
        	<app-secondary></app-secondary>
        </header> <!-- .cd-auto-hide-header -->
    </div>
</template>

<script>
    import Primary from './Primary.vue';
    import Secondary from './Secondary.vue';
    
    export default {
        components: {
            'app-primary': Primary,
            'app-secondary': Secondary
        }
    }
</script>

<style scoped>

</style>