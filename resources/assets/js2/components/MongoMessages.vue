<template>
    <div id="app-mongo-messages">
        <app-mongo-message v-for="mongoMessage in mongoMessages" 
            :m="mongoMessage"
            :key="mongoMessage.id"></app-mongo-message>
    </div>
</template>

<script>
    import MongoMessage from './MongoMessage.vue';
    
    export default {
        components: {
            'app-mongo-message': MongoMessage
        },
        data() {
            return {
                mongoMessages: []
            }
        },
        created() {
            /* Get MongoMessages */
            axios.get('/getMessages').then(response => {
                this.mongoMessages = response.data;
                console.log(this.mongoMessages);
            });
        }
    }
</script>