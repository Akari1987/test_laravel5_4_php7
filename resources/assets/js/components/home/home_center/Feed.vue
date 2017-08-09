<template>
    <div class="ibox float-e-margins"> 
    <!--<div>-->
        <!--<div v-infinite-scroll="onInfinite" infinite-scroll-disabled="busy" infinite-scroll-distance="10">    -->
        <!--                     <p v-for="item in list">-->
        <!--                        Line:-->
        <!--                        <span v-text="item"></span>-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--<div class="ibox-title">-->
        <!--    <h5>User Recommendation</h5>-->
        <!--    <div class="ibox-tools">-->
        <!--        <a>-->
        <!--        <li class="fa fa-wrench"><router-link to="/edit">edit</router-link></li>-->
        <!--        </a>                        -->
        <!--    </div>-->
        <!--</div>-->
        <!--<div>-->
        <!--    <div class="panel panel-default">-->
        <!--        <div class="panel-heading">-->
        <!--            All Users-->
        <!--        </div>-->
        <!--        <div class="panel-body">-->
        <!--            <tbody>-->
                        
            <p v-for="item in list">
                Line: 
                <span v-text="item"></span>
            </p>
            <infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>
                        <!--<p v-for="(recommend, key) in list">-->
                        <!--    <span v-text="recommend.name"></span>-->
                        <!--    <span v-text="recommend.avatar"></span>-->
                            
                        <!--    <tr>-->
                                <!--<td clphpass="table-text">-->
                                <!--    <img :src='getPic(r.avatar)' class="img-circle" alt="profile" width="45px" >-->
                                <!--</td>-->
                        <!--        <td clphpass="table-text">-->
                                    <!--<span v-text="recommend.name"></span>-->
                        <!--        </td>-->
                                <!--<td>-->
                                <!--    <div>-->
                                <!--        <button class="btn btn-success" @click="reqFollow"  :class="{ inactive: no}">Follow</button>-->
                                <!--        <button class="btn btn-primary a-btn" @click="reqUnfollow" :class="{ inactive: !no }">-->
                                <!--            <span></span>-->
                                <!--            <span>Following</span>-->
                                <!--            <span>Unfollow</span>-->
                                <!--        </button>-->
                                <!--    </div>-->
                                <!--</td>-->
                        <!--    </tr>-->
                        <!--</p>-->
                        
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
    import InfiniteLoading from 'vue-infinite-loading';
    // import Recommend from './Recommend.vue';
    
    export default {
        components: {
            // 'app-recommend': Recommend
            InfiniteLoading,
            // vueScrollbar
        },
        data() {
            return {
                busy: false,
                list: []
            }
        },
        created() {
            // axios.get('/res_recommend').then(response => {
            //     // console.log(response);
            //     // this.user = response.data.name;
            //     // this.avatar = response.data.avatar;
            //     // const user = response.data;
            //     // this.setUser(user);
            //     // this.recommends = response.data;
            // });
        },
        methods: {
            // onInfinite() {
            //     setTimeout(() => {
            //         axios.get('/res_recommend').then(response => {
            //             console.log(response);
                        
            //             this.list.push(response.data);
                        
            //             const temp = [];
                        
            //             console.log(temp);
            //             this.list = this.list.concat(temp);
            //         });
            //         console.log(this.list);
            //         this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
            //     }, 1000);
            // }
            // onInfinite() {
            //     this.busy = true;
            //         setTimeout(() => {
            //              axios.get('/res_recommend').then(response => {
            //             console.log(response);
                        
            //             this.list.push(response.data);
                        
            //             // const temp = [];
                        
            //             // console.log(temp);
            //             // this.list = this.list.concat(temp);
            //         });
            //         console.log(this.list);
            //     }, 1000);
            //     this.busy = false;
            //     // this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
            //     // this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            // },
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
                this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
            },
        }
    }
</script>