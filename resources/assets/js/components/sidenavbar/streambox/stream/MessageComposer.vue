<template>
    <div class="vue-message-composer">
        <div class="mail-text h-200"  :class="{ hide: active }">
            <div class="summernote" >
                <h3>Hello Jonathan! </h3>
                dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                <br/>
                <br/>
            </div>
            
            <div class="clearfix"></div>
        </div>
        <div>
                
            </div>
        <div class="mail-body text-right tooltip-demo">
            <button class="btn btn-success  dim" type="button" @click="initSummernote"><i class="fa fa-pencil-square-o"></i></button>
            <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Send</a>
        </div>
                    <div class="clearfix"></div><!--
        <link rel="stylesheet" href="css/summernote.css" type="text/css" />
        <link rel="stylesheet" href="css/summernote-bs3.css" type="text/css" />-->
    </div>
</template>

<script>
    import "../../../../plugins/summernote/summernote.min.js";
    
    export default {
        data() {
            return {
                //summernote: false
                active: true
            }    
        },
        beforeCreate() {
            console.log('beforecreate');
        },
        created() {
            console.log('created');
        },
        beforeCreated() {
            console.log('beforecreated');
        },
        beforeMount() {
            console.log('beforeMount');
        },
        //SUMMERNOTE
        mounted() {
            $('.summernote').summernote();
            console.log('mounted');
        },
        methods: {
            initSummernote() {
                this.active = !(this.active);
                //this.summernote = !(this.summernote);
                //this.summernote = true;
                /*if(this.summernote) {
                    $('.summernote').summernote();
                }*/
            }
        }
    }
</script>

<style type="text/css">
   .hide {
       display: none;
   }
</style>