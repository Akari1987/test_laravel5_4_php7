<template>
    <div class="vue-messages col-lg-9 animated fadeInRight">
        <div class="mail-box-header">
            <div class="pull-right tooltip-demo">
                <!--<button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>-->
            </div>
            
            <div class="mail-tools tooltip-demo m-t-md">
                <h5>
                    <span class="pull-right font-noraml">10:15AM 02 FEB 2014</span>
                    <span class="font-noraml">From: </span>alex.smith@corporation.com
                </h5>
            </div>
        </div>
        <div class="mail-box">
            <app-balloon></app-balloon>
            <app-message-composer></app-message-composer>
        </div>
    </div>
</template>

<script>
    import Balloon from './Balloon.vue';
    import MessageComposer from './MessageComposer.vue';
    import Test from './Test.vue';
    
    export default {
        components: {
            'app-balloon': Balloon,
            'app-message-composer': MessageComposer,
            'app-test': Test,
            
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