<template>
    <div class="large-sidenavbar" v-if=" isLarge === true" >
        <sidenavbar></sidenavbar>
    </div>
</template>

<script>
    import {displayMixin} from '../../mixins/displayMixin';
    
    export default {
        mixins: [displayMixin],
    }
</script>