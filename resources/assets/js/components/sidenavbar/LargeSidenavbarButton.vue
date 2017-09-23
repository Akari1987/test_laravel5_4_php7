<template>
    <div class="large-sidenavbar-button" v-if="isLarge === true">
        <a class="navbar-minimalize  btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div>
</template>

<script>
    import {displayMixin} from '../../mixins/displayMixin';
    
    export default {
        mixins: [displayMixin],
    }
</script>

<style scoped>
    .large-sidenavbar-button {
        position: fixed;
        z-index: 10001
    }
    
    .navbar-minimalize {
        /*margin-left: 20px;*/
        position: relative;
        top: -59px;
        left: 20px;
    }
</style>