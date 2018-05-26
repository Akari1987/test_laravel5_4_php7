<template>
    <div class="follows panel panel-default">
        <div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Follows</h5>
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
                                    <!--<h3>User Recommendationでフォローした後、ページをリロードしてください。</h3>-->
                                    <app-follow
                                        v-for="follow in follows"
                                        :f="follow"
                                        :key="follow.id"></app-follow>
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
    import {mapActions} from 'vuex';
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    import Follow from './Follow.vue';
    
    export default {
        
        components: {
            'app-follow': Follow,
            InfiniteLoading
        },
        data() {
            return {
                // follows: [],
                list: [],
                
            }
        },
        computed: {
           follows() {
               return this.$store.state.follows.follows;
           }
        },
        created() {
            axios.get('/res_follows_array/' + this.$route.params.id).then(response => {
                this.setFollows(response.data);
            });
        },
        methods: {
            ...mapActions({
                setFollows: 'setFollows',
            }),
            onInfinite() {
                setTimeout(() => {
                    axios.get('/res_follows_array/' + this.$route.params.id).then(response => {
                        this.list.push(response.data);
                    });
                    this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                }, 1000);
                this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            },
        }
    }
</script>