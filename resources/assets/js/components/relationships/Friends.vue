<template>
    <div class="friends">
        <div>
            <div class="ibox float-e-margin">
                <div class="ibox-title">
                    <h5>friends</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div>
                        <div class="feed-activity-list">
                            <div class="panel-body">
                                <tbody>
                                    <!--<p v-for="(follow, key) in list">-->
                                    <!--    <span v-text="follow[key].name"></span>-->
                                    <!--    <img :src='getUserPic(follow[key].avatar)' class="img-circle" alt="profile" width="45px" >-->
                                    <!--</p>-->
                                    <!--<infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>-->
                                    <!--<app-follow-->
                                    <!--    v-for="follow in follows"-->
                                    <!--    :f="follow"-->
                                    <!--    :key="follow"></app-follow>-->
                                </tbody>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    
    export default {
        components: {
            InfiniteLoading
        },
        data() {
            return {
                follows: [],
                list: [],
                
            }
        },
        created() {
            axios.get('/res_follows_array/' + this.$route.params.id).then(response => {
                console.log(response);
                this.follows = response.data;
            });
        },
        methods: {
            onInfinite() {
                setTimeout(() => {
                         axios.get('/res_follows_array').then(response => {
                        console.log(response);
                        
                        this.list.push(response.data.data);
                    });
                    console.log(this.list);
                    this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                }, 1000);
                this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            },
           getUserPic(path) {
                return '/' + path;
            }, 
        }
    }
</script>