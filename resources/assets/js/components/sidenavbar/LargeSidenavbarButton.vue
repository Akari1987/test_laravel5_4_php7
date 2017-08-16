<template>
    <div class="large-sidenavbar-button" v-if="isLarge === true">
        <a class="navbar-minimalize  btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                atLarge: true
            }
        },
        computed: {
            isLarge() {
                if(window.matchMedia('(min-width: 1024px)').matches)
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