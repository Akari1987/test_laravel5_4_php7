<template>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Recommend Users</h5>
            <div class="ibox-tools">
                <a>
                <li class="fa fa-wrench"><router-link to="/edit">edit</router-link></li>
                </a>                        
            </div>
        </div>
        <div class="ibox-content" id="container" ref="scrollWrapper" infinite-wrapper>
            <!--<h3>ユーザーのフォローと無限スクロール</h3>-->
            <p class="infinite" v-for="(rec, key) in list">
                <section class="user_card col-sm-12">    
                    <router-link :to="'/user/' + rec.id">
                        <img :src="getUserPic(rec.avatar)" class="img-circle" alt="profile" width="80px" @click="[loadProfile(rec.id), changeFilter()]">
                    </router-link>
                    <section class="col-sm-8">
                        <section>
                            <span v-text="rec.name"></span>
                            @ <span v-text="rec.id_st"></span>
                        </section>
                        
                        <button class="btn btn-success" @click="reqFollow(rec), no = !no"  :class="{inactive: rec.follow}">Follow</button>
                        <button class="btn btn-primary a-btn" @click="reqUnfollow(rec), no = !no" :class="{ inactive: !(rec.follow) }">
                            <span></span>
                            <span>Following</span>
                            <span>Unfollow</span>
                        </button>
                        
                        <button class="btn btn-success" @click="sendFriendRequest(rec), no = !no"  :class="{inactive: rec.friend}">Send Friend Request</button>
                        <button class="btn btn-primary a-btn" @click="reqUnfollow(rec), no = !no" :class="{ inactive: !(rec.friend) }">
                            <span></span>
                            <span>Friend Requested</span>
                            <span>Send Cancel Request</span>
                        </button>
                        
                        <span v-text="rec.profile"></span>
                    </section>
                </section>
                <div class="clearfix":class="{emitter: no}"></div>
            </p>
            <infinite-loading @infinite="infiniteHandler" ref="infiniteLoading"></infinite-loading>
        </div>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';
    import {getUserPicMixin} from '../../mixins/getUserPicMixin';
    import {recommendedUsersMixin} from '../../mixins/recommendedUsersMixin';
    
    import InfiniteLoading from 'vue-infinite-loading';
    import Ps from 'perfect-scrollbar';
    
    export default {
        mixins: [getUserPicMixin, recommendedUsersMixin],
        components: {
            InfiniteLoading,
        },
        data() {
            return {
                yes: true,
                no: false,
                follow: false,
                friend: false,
                isFollowing: false,
                recommends: [],
                page: 1,
            }
        },
        // created() {
        //     axios.get('/res_users').then(response => {
        //         this.loadRecommends(response.data);
        //     });
        // //     axios.get('/res_users').then(response => {
        // //         // console.log(response);
        // //         // this.user = response.data.name;
        // //         // this.avatar = response.data.avatar;
        // //         // const user = response.data;
        // //         // this.setUser(user);
        // //         this.recommends = response.data.data;
        // //         // console.log(this.recommends);
        // //     });
        // },
        mounted() {
            Ps.initialize(this.$refs.scrollWrapper);
        },
        // computed: {
            // userRecommendeds() {
            //   return this.$store.state.recommend.recommended_users;
            // },
        // },
        methods: {
            ...mapActions({
                callSendActivity: 'sendActivity',
                loadRecommends: 'loadRecommends',
                loadUser: 'loadUser',
                clearRecommends: 'clearRecommends',
            }),
            infiniteHandler($state) {
                axios.get('/res_recommends/' + this.$route.params.id + '?page=' + this.page).then(response => {
                    if(response.data.data.length) {
                        const recommends = response.data.data;
                        console.log(recommends);
                        this.loadRecommends(recommends); // @recommend.js
                        this.page++;
                        $state.loaded();
                        this.$nextTick(() => {
                            Ps.update(this.$refs.scrollWrapper);
                        });
                    } else {
                        $state.complete();
                    }
                });
            },
            /* reset infinite loading */
            changeFilter() {
                this.page = 1;
                this.$nextTick(() => {
                    this.$refs.infiniteLoading.$emit('$InfiniteLoading:reset');
                });
            },
            reqFollow(rec) {
                axios.post('/follow/' + rec.id);
                rec.follow = !rec.follow;
                const activity = {
                    who: 'あなたは',
                    activity: rec.name + 'をフォローしました。'
                };
                new noty({
                    type: 'success',
                    layout: 'bottomLeft',
                    text: 'You follow ' + rec.name + '.'
                    
                }).show();
                this.callSendActivity(activity);
            },
            reqUnfollow(rec) {
                // axios.post('/unfollow/' + this.list[0].id);
                axios.post('/unfollow/' + rec.id);
                rec.follow = !(rec.follow);
                new noty({
                    type: 'info',
                    layout: 'bottomLeft',
                    text: 'You unfollow ' + rec.name + '.'
                }).show();
            },
            sendFriendRequest(rec) {
                axios.get('/add_friend/' + rec.id);
                rec.friend = !rec.friend;
                new noty({
                    type: 'success',
                    layout: 'bottomLeft',
                    text: 'Friend request sent to ' + rec.name + '.'
                    
                }).show();
            },
        }
    }
</script>

<style scoped>
    #container {
        height: 1000px;
        /*bottom: 200px;*/
    }
    
    .ibox-content {
        padding-left: 0;
        padding-right: 0;
        bottom: 0;
    }
    
    h3 {
        text-align: center;
    }
    
    .user_card {
        padding: 5px;
        margin-bottom: 20px;
        display: block;
    }
</style>