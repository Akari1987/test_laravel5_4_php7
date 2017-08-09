<template>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>User Recommendation</h5>
            <div class="ibox-tools">
                <a>
                <li class="fa fa-wrench"><router-link to="/edit">edit</router-link></li>
                </a>                        
            </div>
        </div>
        <div class="ibox-content" id="container" ref="scrollWrapper" infinite-wrapper>
            <h3>ユーザーのフォローと無限スクロール</h3>
            <p class="infinite" v-for="(rec, key) in list">
                <section class="user_card col-sm-12">    
                    <section class="col-sm-4">
                        <img :src='getPic(rec.avatar)' class="img-circle img-responsive" alt="profile" width="96px">
                    </section>
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
            <infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>
        </div>
        <!--<div>-->
        <!--    <div class="panel panel-default">-->
        <!--        <div class="panel-heading">-->
        <!--            All Users-->
        <!--        </div>-->
        <!--        <div class="panel-body">-->
        <!--            <tbody>-->
                        <!--<app-recommend-->
                        <!--    v-for="recommend in recommends"-->
                        <!--    :r="recommend"-->
                        <!--    :key="recommend"></app-recommend>-->
        <!--            </tbody>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</template>

<script>
    import axios from 'axios';
    import {mapActions} from 'vuex';
    
    import InfiniteLoading from 'vue-infinite-loading';
    import Recommend from './Recommend.vue';
    import Ps from 'perfect-scrollbar';
    
    export default {
        components: {
            'app-recommend': Recommend,
            InfiniteLoading,
        },
        data() {
            return {
                yes: true,
                no: false,
                isFollowing: false,
                password: null,
                recommends: [],
                list: [],
                page: 1
            }
        },
        created() {
            axios.get('/res_users').then(response => {
                // console.log(response);
                // this.user = response.data.name;
                // this.avatar = response.data.avatar;
                // const user = response.data;
                // this.setUser(user);
                this.recommends = response.data.data;
                // console.log(this.recommends);
            });
        },
        mounted() {
            Ps.initialize(this.$refs.scrollWrapper);
        },
        methods: {
            ...mapActions({
                callSendActivity: 'sendActivity'
            }),
            onInfinite() {
                    axios.get('/res_recommend?page=' + this.page).then(response => {
                        if(response.data.data.length) {
                            // console.log(response);
                            this.list = this.list.concat(response.data.data);
                            console.log(this.list);
                            this.page++;
                            this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                            this.$nextTick(() => {
                              Ps.update(this.$refs.scrollWrapper);
                            });
                        } else {
                            this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
                        }
                    });
            },
            changeFilter() {
              this.list = [];
              this.$nextTick(() => {
                this.$refs.infiniteLoading.$emit('$InfiniteLoading:reset');
              });
            },
            // onInfinite() {
            //         var init = true;
            //         var page = 1;
            //         for(var page = 1; page < 10; page++)
            //         {
            //             axios.get('/res_recommend?page=' + page).then(response => {
            //                 if(response.data.data.length)
            //                 {
            //                     console.log(response);
            //                     this.list = this.list.concat(response.data.data);
            //                     console.log(this.list);
            //                 } 
            //                 else
            //                 {
            //                     this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            //                     init = false;
            //                 }
            //             });
            //         }
            // },
           getPic(path) {
                var match = path.match(/http/);
                if(match)
                {
                    return path;
                } else if(path == null)
                {
                    return '/users/avatar/default.png';
                } else
                {
                    return '/' + path;
                }
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