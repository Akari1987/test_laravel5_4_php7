<template>
    <div class="home">
        <app-home-left class="col-md-3"></app-home-left>
        <app-home-center class="col-md-5"></app-home-center>
        <!--<div class="col-md-5">-->
            <!--<example></example>-->
        <!--    <p v-for="item in list">-->
        <!--        Line: -->
        <!--        <span v-text="item"></span>-->
        <!--    </p>-->
        <!--    <infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>-->
        <!--</div>-->
        <app-home-right class="col-md-4"></app-home-right>

        <!--<app-home-center></app-home-center>-->
    </div>
</template>

<script>
    import HomeLeft from './home_left/HomeLeft.vue';
    import HomeCenter from './home_center/HomeCenter.vue';
    import HomeRight from './home_right/HomeRight.vue';
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    export default  {
        components: {
            'app-home-left': HomeLeft,
            'app-home-center': HomeCenter,
            'app-home-right': HomeRight,
            InfiniteLoading
        },
        data() {
            return {
                busy: false,
                list: []
            }
        },
        methods: {
            onInfinite() {
                this.busy = true;
                setTimeout(() => {
                    const temp = [];
                    for (let i = this.list.length + 1; i <= this.list.length + 20; i++) {
                      temp.push(i);
                    }
                    this.list = this.list.concat(temp);
                    this.busy = false;
                    this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                    
                }, 1000);
                // this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            },
        }
    }
</script>