<template>
    <div class="secondary">
        <nav class="cd-secondary-nav navbar navbar-static-top navbar-fixed" role="navigation">
            <ul>
                <li v-for="list in currentNav">
                    <router-link :to="list[0]" activeClass="active" v-html="list[1]" >{{ list[1] }}</router-link>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    import Ps from 'perfect-scrollbar';
    
    import secondary from './data/secondary.js';
    
    export default {
        computed: {
            currentNav() {
                const path = this.$route.path;
                if(String(path).match(/home/))  // home
                {
                    return this.secondary[0];
                }
                else if(String(path).match(/user/))  // user
                {
                    return this.secondary[1];
                }
                else if(String(path).match(/stream|email|member/))  // stream
                {
                    return this.secondary[0];
                }
            }
        },
        data() {
            return {
                secondary
            }
        },
        mounted() {
            Ps.initialize(this.$refs.scrollWrapper, {
                // suppressScrollX: true
            });
        }
    }
</script>

<style scoped>
    .secondary {
        position: relative;
    }
    
    .cd-secondary-nav {
        height: 50px;
        vertical-align: middle;
    }
    
    ul {
        display: table;
        table-layout: fixed;
        width: 100%;
        height: 100%;
        padding: 0;
    }
    
    .cd-secondary-nav li {
        display: table-cell;
        text-align: center;
        float: none;
    }
    
    .cd-secondary-nav ul::after {
        display: none;
    }
    
    .cd-secondary-nav a {
        padding: 0;
    }
    
    .navbar {
        margin-bottom: 0;
    }
</style>