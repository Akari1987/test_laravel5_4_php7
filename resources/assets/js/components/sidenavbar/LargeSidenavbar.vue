<template>
    <div class="large-sidenavbar" v-if=" isLarge === true" >
        <sidenavbar></sidenavbar>
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