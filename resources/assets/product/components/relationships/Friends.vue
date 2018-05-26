<template>
    <div class="friends">
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
                <div class="feed-activity-list">
                    <!--<tbody>-->
                        <!--<p v-for="(follow, key) in list">-->
                        <!--    <span v-text="follow[key].name"></span>-->
                        <!--    <img :src='getUserPic(follow[key].avatar)' class="img-circle" alt="profile" width="45px" >-->
                        <!--</p>-->
                        <!--<infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>-->
                        <app-friend
                            v-for="friend in lists"
                            :f="friend"
                            :key="friend.id"
                            class=""></app-friend>
                    <!--</tbody>-->
                </div>
                <!--<button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>-->
            </div>
            <!--<div class="row col-lg-4">-->
            <!--    <div class="contact-box">-->
            <!--        <div class="col-sm-4">-->
            <!--            <div class="text-center">-->
                            <!--<tbody>-->
            <!--                    <p v-for="(follow, key) in list">-->
            <!--                        <span v-text="follow[key].name"></span>-->
            <!--                        <img :src='getUserPic(follow[key].avatar)' class="img-circle" alt="profile" width="45px" >-->
            <!--                    </p>-->
            <!--                    <infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>-->
            <!--                    <app-friend-->
            <!--                        v-for="friend in lists"-->
            <!--                        :f="friend"-->
            <!--                        :key="friend.id"-->
            <!--                        class=""></app-friend>-->
                            <!--</tbody>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="clearfix"></div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';
    
    import {getUserPicMixin} from '../../mixins/getUserPicMixin';
    import {friendsMixin} from '../../mixins/friendsMixin';
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    import Friend from './Friend.vue';
    
    export default {
        mixins: [getUserPicMixin, friendsMixin],
        components: {
            // InfiniteLoading
            'app-friend': Friend
        },
        created() {
            axios.get('/res_friends_array/' + this.$route.params.id).then(response => {
                console.log(response);
                // this.friends = response.data;
                this.callLoadFriends(response.data);
            });
        },
        methods: {
            ...mapActions({
                callLoadFriends: 'loadFriends'
            }),
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

<style scoped>
    .ibox-content {
        padding:  15px;
    }
</style>