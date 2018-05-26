<template>
    <div class="topnavbar">
        <header class="cd-auto-hide-header">
        	<app-primary></app-primary>
        	<app-secondary></app-secondary>
        </header>
    </div>
</template>

<script>
    import Primary from './Primary.vue';
    import Secondary from './Secondary.vue';
    
    export default {
        components: {
            'app-primary': Primary,
            'app-secondary': Secondary
        },
        computed: {
            isNotLarge() {
                if(window.matchMedia('(max-width: 1024px)').matches)
                {
                    return true;
                } else
                {
                    return false;
                }
            }
        }
    }
</script>

<style>
    /*.isNotLarge {*/
    /*    position: sticky;*/
    /*    top: 0px;*/
    /*    width: 100%;*/
    /*    z-index: 10000;*/
    /*}*/
</style>