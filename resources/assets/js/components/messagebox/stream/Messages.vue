<template>
    <div class="app-messages col-lg-6 col-mg-6 animated fadeInRight">
        <div class="mail-box-header">
            <div class="pull-right tooltip-demo">
                <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>
            </div>
            <div class="mail-tools tooltip-demo m-t-md">
                <h5>
                    <span class="font-noraml">Stream with: {{ streamId }}</span>
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
        data() {
            return {
                streamId: this.$store.state.stream.streamId
            }
        },
        computed: {
            ...mapGetters({
                messages: 'messageLogs',
            })    
        },
        components: {
            'app-balloon': Balloon,
            'app-message-composer': MessageComposer,
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