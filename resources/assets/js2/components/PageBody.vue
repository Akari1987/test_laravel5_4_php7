<template>
    <div id="page-body">
        <v-app dark>
            <header class="cd-secondary-nav navbar">
                <app-secondary></app-secondary>
            </header>
            <v-content>
                <v-container fluid grid-list-md>
                    <v-layout row wrap>
                        <v-flex md6 sm6 xs12>
                            <router-view></router-view>
                        </v-flex>
                        <v-flex md6>
                            <v-card class="pa-3 mb-3">
                                <app-log></app-log>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-content>
                <!--<div class="row">-->
                <!--    <div class="col-sm-6">-->
                         
                <!--    </div>-->
                <!--    <div class="col-sm-6">-->
                <!--        <div class="card p-3 mb-3">-->
                            
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<app-mongo-form></app-mongo-form>-->
                <!--<div class="card">-->
                <!--    <li>-->
                <!--        <a href="/user/1">Reload to app.js</a>-->
                <!--    </li>-->
                <!--</div>-->
        </v-app>
    </div>
</template>

<script>
    import { mapActions } from 'vuex';

    import Secondary from '../../js/components/topnavbar/Secondary.vue';
    import MongoForm from './MongoForm.vue';
    import Log from './Log.vue';
    
    export default {
        components: {
            'app-secondary': Secondary,
            'app-mongo-form': MongoForm,
            'app-log': Log
        },
        data() {
            return {
                drawer: null
            }
        },
        methods: {
            ...mapActions({
                setUser: 'user_setUser'
            }),
        },
        created() {
            /* Fetch auth user profile */
            axios.get('/user').then(response => {
                const user = response.data;
                this.setUser(user);
            });
        }
    }
</script>

<style scoped>
    .cd-secondary-nav {
        position: relative;
        z-index: 1;
        clear: both;
        width: 100%;
        height: 50px;
        background-color: #25283D;
        /* Force Hardware Acceleration */
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        will-change: transform;
        -webkit-transition: -webkit-transform .5s;
        transition: -webkit-transform .5s;
        transition: transform .5s;
        transition: transform .5s, -webkit-transform .5s;
    }
    
    .cd-secondary-nav a {
        display: block;
        color: #ffffff;
        opacity: .6;
        line-height: 50px;
        padding: 0 1em;
    }
    
    .card {
        border-radius: 10px;
    }
</style>