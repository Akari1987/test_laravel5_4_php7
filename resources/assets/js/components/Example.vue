<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an xample component!
                    </div>
                </div>
            </div>
        </div>
        <p v-for="item in list">
            Line:
            <span v-text="item"></span>
        </p>
        <infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>
        <!--<div v-infinite-scroll="loadMore" infinite-scroll-disabled="busy" infinite-scroll-distance="10">-->
        <!--    <p v-for="item in data">Line:</p>-->
        <!--    <span v-text="item"></span>-->
        <!--</div>-->
    </div>
</template>

<script>
    var count = 0;
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                data: [],
                list: [],
                busy: false
            }
        },
        methods: {
            // loadMore: function() {
            //   this.busy = true;
        
            //   setTimeout(() => {
            //     for (var i = 0, j = 10; i < j; i++) {
            //       this.data.push({ name: count++ });
            //     }
            //     this.busy = false;
            //   }, 1000);
            // },
            onInfinite() {
                // setTimeout(() => {
                //     axios.get('/res_recommend').then(response => {
                //         console.log(response);
                        
                //         this.list.push(response.data);
                        
                //         // const temp = [];
                        
                //         // console.log(temp);
                //         // this.list = this.list.concat(temp);
                //     });
                //     console.log(this.list);
                //     this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                // }, 1000);
                setTimeout(() => {
                    const temp = [];
                    for (let i = this.list.length + 1; i <= this.list.length + 20; i++) {
                      temp.push(i);
                    }
                    this.list = this.list.concat(temp);
                    this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                }, 1000);
            }
        },
        components: {
            InfiniteLoading
        }
    }
</script>
