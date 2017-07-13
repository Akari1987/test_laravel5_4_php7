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
        <p v-for="(rec, key) in list">
            <span v-text="rec.name"></span>
            <img :src='getPic(rec.avatar)' class="img-circle" alt="profile" width="45px" >
        </p>
        <infinite-loading :on-infinite="onInfinite" ref="infiniteLoading"></infinite-loading>
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Users
                </div>
                <div class="panel-body">
                    <tbody>
                        <app-recommend
                            v-for="recommend in recommends"
                            :r="recommend"
                            :key="recommend"></app-recommend>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    
    import InfiniteLoading from 'vue-infinite-loading';
    
    import Recommend from './Recommend.vue';
    
    export default {
        components: {
            'app-recommend': Recommend,
            InfiniteLoading,
        },
        data() {
            return {
                recommends: [],
                list: [],
                page: 1
            }
        },
        created() {
            axios.get('/res_users').then(response => {
                console.log(response);
                // this.user = response.data.name;
                // this.avatar = response.data.avatar;
                // const user = response.data;
                // this.setUser(user);
                this.recommends = response.data.data;
                console.log(this.recommends);
            });
        },
        methods: {
            onInfinite() {
                    axios.get('/res_recommend?page=' + this.page).then(response => {
                        if(response.data.data.length) {
                            console.log(response);
                            this.list = this.list.concat(response.data.data);
                            console.log(this.list);
                            this.page++;
                            this.$refs.infiniteLoading.$emit('$InfiniteLoading:loaded');
                        } else {
                            this.$refs.infiniteLoading.$emit('$InfiniteLoading:complete');
                        }
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
                return '/' + path;
            }, 
        }
    }
</script>