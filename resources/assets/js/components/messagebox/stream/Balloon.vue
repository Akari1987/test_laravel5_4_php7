<template>
    <div class="balloon">
        <div class="box">
            <div class="vue-message">
                <p>{{ message.message }}</p>
            </div>
            <!--<app-message></app-message>-->
            <div class="icon">
                <a href="profile.html" class="pull-left">
                    <img alt="image" class="img-circle" :src="getUserPic(message.avatar)"><small>{{ message.user }}</small>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import Message from './Message.vue';

    export default {
        props: ['message'],
        data() {
            return {
            
            }
        },
        components: {'app-message': Message},
        methods: {
            getUserPic(path) {
                var match = String(path).match(/http/);
                if(match)
                {
                    return path;
                } else if(path == null)
                {
                    return '/users/avatar/default.png';
                } else
                {
                    return '/' + path;
                }
            },
        }
    }
</script>

<style type="text/css">
    .vue-message {
        padding: 15px;
    }
    .img-circle {
        width: 5rem;
    }
</style>