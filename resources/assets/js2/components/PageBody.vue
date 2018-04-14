<template>
    <div id="page-body">
        <nav class="cd-secondary-nav navbar">
            <app-secondary></app-secondary>
        </nav>
        <div id="content" class="container">
            <div class="row">
                <app-mongo-form></app-mongo-form>
                <router-view></router-view>
                <div class="panel panel-default">
                    <li>
                        <a href="/user/1">Reload to app.js</a>
                    </li>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions } from 'vuex';

    import Secondary from '../../js/components/topnavbar/Secondary.vue';
    import MongoForm from './MongoForm.vue';
    
    export default {
        components: {
            'app-secondary': Secondary,
            'app-mongo-form': MongoForm,
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

<style>
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
</style>