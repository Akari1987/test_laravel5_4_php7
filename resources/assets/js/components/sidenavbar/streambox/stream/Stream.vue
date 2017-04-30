<template>
    <div>
        <app-stream-side-panel></app-stream-side-panel>
        <app-messages></app-messages>
        <!--<app-message-composer></app-message-composer>-->
    </div>
</template>

<script>
    import Messages from './Messages.vue';
    import MessageComposer from './MessageComposer.vue';
    import StreamSidePanel from './StreamSidePanel.vue';
    //import Streamnavbar from './Streamnavbar.vue';
    
    export default {
        components: {
            //'app-streamnavbar': Streamnavbar,
            'app-messages': Messages,
            'app-message-composer': MessageComposer,
            'app-stream-side-panel': StreamSidePanel,
        }
    }
</script>