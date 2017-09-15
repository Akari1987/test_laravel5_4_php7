<template>
    <div class="status-card panel panel-default">
        <div class="row">
            <p class="text-center" v-if="loading">
                Loading...
            </p>
            <p class="text-center" v-if="!loading">
                <button class="btn btn-success" v-if="status == 0">+ Friend Request</button>
                <button class="btn btn-success" v-if="status == 0">+ Follow</button>
            </p>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    
    export default {
        data() {
           return {
               status: "",
               loading: true,
           } 
        },
        mounted() {
            axios.get('/check_relationship_status/' + this.$route.params.id).then(response => {
                // console.log(response);
                this.status = response.data.status;
                this.loading = false;
            });
        },
        computed: {
            relationshipStatus() {
                
            }
        },
    }
</script>