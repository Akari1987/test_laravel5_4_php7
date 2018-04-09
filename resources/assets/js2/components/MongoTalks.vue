<template>
    <div id="mongo-talks">
        <app-mongo-talk v-for="mongoTalk in mongoTalks"
            :t="mongoTalk"
            :key="mongoTalk.id"></app-mongo-talk>
    </div>
</template>

<script>
    import MongoTalk from './MongoTalk.vue';
    
    export default {
        components: {
            'app-mongo-talk': MongoTalk
        },
        data() {
            return {
                mongoTalks: []
            }
        },
        mounted() {
            /* Get MongoTalks */
            axios.get('/getTalks').then(response => {
                this.mongoTalks = response.data;
                console.log(this.mongoTalks);
            });
        }
    }
</script>