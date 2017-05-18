<template>
    <div class="balloon">
        <div class="box">
            <div class="vue-message">
                <p>{{ message.message }}</p>
                <!--<p>{{ message2.messages.message }}</p>-->
            </div>
            <!--<app-message></app-message>-->
            <div class="icon">
            <a href="profile.html" class="pull-left">
                <img alt="image" class="img-circle" :src="message.avatar"><small>{{ message.user }}</small>
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
    }
</script>

<style type="text/css">

</style>