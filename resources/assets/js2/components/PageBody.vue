<template>
    <div id="page-body" class="container">
        <div class="row">
            <app-mongo-form></app-mongo-form>
            <app-mongo-messages></app-mongo-messages>
            <div class="panel panel-default">
                <li>
                    <a href="/user/1">Reload to app.js</a>
                </li>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions } from 'vuex';

    import MongoForm from './MongoForm.vue';
    import MongoMessages from './MongoMessages.vue';
    
    export default {
        components: {
            'app-mongo-form': MongoForm,
            'app-mongo-messages': MongoMessages,
        },
        methods: {
            ...mapActions({
                setUser: 'setUser'
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