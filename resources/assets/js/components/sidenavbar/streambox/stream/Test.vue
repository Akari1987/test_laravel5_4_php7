<template>
    <div class="vue-message-composer">
        <div class="mail-text h-200"></div>
            <div class="summernote" >
                <h3>Hello Jonathan! </h3>
                dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                when an unknown printer toaok a galey of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchaged. It was popuarise in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                <br/>
                <br/>
            </div>
            
            <div class="clearfix"></div>
        
        <div>
                
            </div>
        <div class="mail-body text-right tooltip-demo">
            <button class="btn btn-success  dim" type="button" ><i class="fa fa-pencil-square-o"></i></button>
            <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Send</a>
        </div>
                    <div class="clearfix"></div>
        <link rel="stylesheet" href="css/summernote.css" type="text/css" />
        <link rel="stylesheet" href="css/summernote-bs3.css" type="text/css" />
    </div>
</template>

<script>
    import "../../../../plugins/summernote3/jquery-2.1.1.js";
    import "../../../../plugins/summernote3/summernote.min.js";
    
    
    export default {
   
       
        //SUMMERNOTE
        mounted() {
            $('.summernote').summernote({
                airMode: true
            });
        
        },
        methods: {
            
            
        }
    }
</script>

<style type="text/css">
    @import url('../../../../plugins/summernote/summernote.css');
    @import url('../../../../plugins/summernote/summernote-bs3.css');
</style>