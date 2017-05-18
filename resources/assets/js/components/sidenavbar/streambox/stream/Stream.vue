<template>
    <div>
        <app-stream-side-panel></app-stream-side-panel>
        <app-messages></app-messages>
        <!--<app-message-composer></app-message-composer>-->
    </div>
</template>

<script>
    import axios from 'axios';
    
    import Messages from './Messages.vue';
    //import MessageComposer from './MessageComposer.vue';
    import StreamSidePanel from './StreamSidePanel.vue';
    
    export default {
        components: {
            'app-messages': Messages,
            //'app-message-composer': MessageComposer,
            'app-stream-side-panel': StreamSidePanel,
        },
        created() {
            console.log('created');
            // axios.post('/get_stream',
            // {
                
            // }).then(response => {
            //     console.log(response);    
            // });
            
        }
    }
</script>

<style lang="scss">
    

    .balloon {
        padding: 8px;
        padding-bottom: 28px;
        position: relative;
        z-index: 0;
    } 

    .box {
        position: relative;
        background: #ccc;
        margin-bottom: 20px;
        border-radius: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .box:after {
        content: '';
        position: absolute;
        height: 50px;
        width: 50px;
        border-radius: 25px;
        z-index: -1;
        background: #fff;
        bottom: -20px;
        left: 50px;
    }

    .box:before {
        content: '';
        position: absolute;
        height: 50px;
        width: 50px;
        border-radius: 25px;
        z-index: -1;
        background: #ccc;
        bottom: -15px;
        left: 35px;
    }    
    .feed-element img.img-circle,
    .icon img.img-circle {
      width: 38px;
      height: 38px;
      margin-top: 15px;
      margin-left: 60px;
      
    }
    
    $balloon-composer-color:#CEE7F7;
    
    input {
        background-color: $balloon-composer-color;
        border: 0px;
        outline: 0;
    }
</style>