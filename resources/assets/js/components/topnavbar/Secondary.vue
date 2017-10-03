<template>
    <div class="secondary">
        <nav class="cd-secondary-nav navbar navbar-static-top navbar-fixed" role="navigation">
            <ul>
                <li v-for="list in currentNav">
                    <router-link :to="list[0]" activeClass="active" >{{ list[1] }}</router-link>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    import secondary from './data/secondary.js';
    
    export default {
        computed: {
            currentNav() {
                const path = this.$route.path;
                if(String(path).match(/home/))
                {
                    return this.secondary[0];
                }
                else if(String(path).match(/user/))
                {
                    return this.secondary[1];
                }
            }
        },
        data() {
            return {
                secondary
            }
        }
    }
</script>

<style scoped>
    .secondary {
        position: relative;
    }
    
    .cd-secondary-nav {
        height: 100%;
        vertical-align: middle;
    }
    
    ul {
        display: table;
        table-layout: fixed;
        width: 100%;
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
</style>