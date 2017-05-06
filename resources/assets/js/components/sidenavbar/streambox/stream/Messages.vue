<template>
    <div class="vue-messages col-lg-9 animated fadeInRight">
        <div class="mail-box-header">
            <div class="pull-right tooltip-demo">
                <!--<button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>-->
            </div>
            
            <div class="mail-tools tooltip-demo m-t-md">
                <h5>
                    <span class="pull-right font-noraml">10:15AM 2 EB2014</span>
                    <span class="font-noraml">Stream with: </span>{{ StreamGroup }}
                </h5>
            </div>
        </div>
        <div class="mail-box">
            <app-balloon v-for="message in messages" :message="message" :key="message.id"></app-balloon>
            <app-message-composer></app-message-composer>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    
    import Balloon from './Balloon.vue';
    import MessageComposer from './MessageComposer.vue';
    //import Test from './Test.vue';
    export default {
        computed: {
            ...mapGetters({
                messages: 'messageLogs'    
            })    
        },
        // getters: {
        //     messages: 'messageLogs'    
        // },
        components: {
            'app-balloon': Balloon,
            'app-message-composer': MessageComposer,
            // 'app-test': Test,
            
        }
    }
</script>

<style type="text/css">
.feed-element img.img-circle,
.icon img.img-circle {
  width: 38px;
  height: 38px;
}
</style>