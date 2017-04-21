<template>
    <div>
        <app-messages><app-messages>
        <app-message-composer></app-message-composer>
    </div>
</template>

<script>
    import Messages from './messages.vue';
    import MessageComposer from './message-composer.vue';
    
    export default {
        components: {
            'app-messages': Messages,
            'app-message-composer': MessageComposer
        }
    }
</script>