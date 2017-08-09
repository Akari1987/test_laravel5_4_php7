<template>
    <div class="profileDetail">
        <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Profile Detail</h5>
                        <div class="ibox-tools">
                            <a>
                            <li class="fa fa-wrench"><router-link to="/edit">edit</router-link></li>
                            </a>                        
                        </div>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <!--<img alt="image" class="img-responsive" :src="userDetail.image" :class="{ inactive: no }">-->
                        </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{ user.name }}</strong></h4>
                        <p><i class="fa fa-map-marker"></i> Japan</p>
                        <h5>
                            About me
                        </h5>
                        <p  class="editable">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                        </p>
                        <div class="row m-t-lg">
                            <div class="col-md-4">
                                <h5><strong>169</strong> Posts</h5>
                            </div>
                            <div class="col-md-4">
                                <router-link :to="{ path: '/user/' + user.name + '/follow' }"><h5><strong>28</strong> Following</h5></router-link>
                            </div>
                            <div class="col-md-4">
                                <h5><strong>240</strong> Followers</h5>
                            </div>
                            <div class="col-md-4">
                                <li><router-link :to="{ path: '/user/' + user.name + '/activity' }">Activity</router-link></li>
                               
                            </div>
                        </div>
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';

    import Edit from './Edit.vue';
    
    export default {
        components: {
            'app-edit': Edit    
        },
        data() {
            return {
                yes: true,
                no: false
            }
        },
        computed: {
            user() {
                return this.$store.state.user.user;
            }
        },
        methods: {
            editMode() {
                console.log('edit mode');
            }
        }
    }
</script>

<style>
    .inactive {
        display: none;
    }
</style>