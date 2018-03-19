<template>
    <div id="page-body" class="container">
        <div class="row">
            <app-mongo-messages></app-mongo-messages>
            <div class="panel panel-default">
                <li>
                    <!--<router-link :to="{ path: 'user/1' }">TEST</router-link>-->
                    <a href="/user/1">TEST</a>
                </li>
            </div>
        </div>
    </div>
</template>

<script>
    import MongoMessages from './MongoMessages.vue';
    
    export default {
        components: {
            'app-mongo-messages': MongoMessages
        }
    }
</script>