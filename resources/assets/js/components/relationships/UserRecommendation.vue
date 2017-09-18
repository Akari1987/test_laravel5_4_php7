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
                        <img :src="getUserPic(rec.avatar)" class="img-circle" alt="profile" width="80px" @click="loadProfile(rec.id)">
                    </router-link>
                    <section class="col-sm-8">
                        <section>
                            <span v-text="rec.name"></span>
                            @ <span v-text="rec.id_st"></span>
                        </section>
                        <button class="btn btn-success" @click="reqFollow(rec), no = !no"  :class="{inactive: rec.no}">Follow</button>
                        <button class="btn btn-primary a-btn" @click="reqUnfollow(rec), no = !no" :class="{ inactive: !(rec.no) }">
                            <span></span>
                            <span>Following</span>
                            <span>Unfollow</span>
                        </button>
                        <span v-text="rec.profile"></span>
                    </section>
                </section>
                <div class="clearfix":class="{emitter: no}"></div>
            </p>
            <infinite-loading @infinite="infiniteHandler"></infinite-loading>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
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
                isFollowing: false,
                password: null,
                recommends: [],
                // list: [],
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
            // onInfinite_recommend() {
            //     axios.get('/res_recommends/' + this.$route.params.id + '?page=' + this.page).then(response => {
            //         if(response.data.data.length) {
            //             const recommends = response.data.data;
            //             this.loadRecommends(recommends); // @recommend.js
            //             this.page++;
            //             this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
            //             this.$nextTick(() => {
            //                 Ps.update(this.$refs.scrollWrapper);
            //             });
            //         } else {
            //             this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            //         }
            //     });
            // },
           infiniteHandler($state) {
                axios.get('/res_recommends/' + this.$route.params.id + '?page=' + this.page).then(response => {
                    if(response.data.data.length) {
                        const recommends = response.data.data;
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
            changeFilter() {
                this.list = [];
                this.$nextTick(() => {
                this.$refs.infiniteLoading.$emit('$InfiniteLoading:reset');
              });
            },
            reqFollow(rec) {
                axios.post('/follow/' + rec.id);
                rec.no = true;
                const activity = {
                    who: 'あなたは',
                    activity: rec.name + 'をフォローしました。'
                };
                this.callSendActivity(activity);
            },
            reqUnfollow(rec) {
                axios.delete('/unfollow/' + this.list[0].id);
                rec.no = !(rec.no);
            }
        }
    }
</script>

<style scoped>
    #container {
        height: 600px;
    }

     /*------------------ 
    | For Follow Button
    -------------------*/
    .a-btn:hover {
        background-color: #ed5565;
        border-color: #ed5565;
    }
    
    .a-btn {
        /*display: block;*/
        float: left;
        position: relative;
        transition: all 0.3s linear;
    }
    
    .a-btn span {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
        transition: all 0.3s linear;
    }
    
    .a-btn span:nth-child(1), 
    .a-btn span:nth-child(3){
        position: absolute;
        top: 6px;
        left: 12px;
        line-height: 22.4px;
        opacity: 0;
    }
    
    .a-btn span:nth-child(1){
        opacity: 0.2;
    }
    
    .a-btn:hover span:nth-child(3){
        opacity: 1; 
    }
    .a-btn:hover span:nth-child(2){
        opacity: 0; 
    }
    .a-btn:hover span:nth-child(1){
        animation: rotate 1s linear; 
    }
    
    .ibox-content {
        padding-left: 0;
        padding-right: 0;
    }
    
    h3 {
        color: red;
        text-align: center;
    }
    
    .user_card {
        padding: 5px;
        margin-bottom: 20px;
        display: block;
    }
</style>