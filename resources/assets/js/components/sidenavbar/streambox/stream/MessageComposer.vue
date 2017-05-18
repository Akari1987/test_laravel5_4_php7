<template>
    <div class="vue-message-composer">
            <div class="balloon">
                <div class="box" :class="{danger: noMessage, animated: noMessage, rubberBand: noMessage}">
                    <div class="vue-message">
                       <input type="text" v-model="messageText" @keyup.enter="sendMessage" :placeholder="placeholder":class="{danger: noMessage}" />
                    </div>
                </div>
            </div>
        <div class="mail-text h-200"  :class="{ hide: active }">
            <div class="summernote" >
                <h3>Hello Jonathan! </h3>
                dummy text of the printng and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchangd. It was popularised in th 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                <br/>
                <br/>
            </div>
            
            <div class="clearfix"></div>
        </div>
        <div>
            </div>
        <div class="mail-body text-right tooltip-demo">
            <button class="btn btn-success  dim" type="button" @click="initSummernote"><i class="fa fa-pencil-square-o"></i></button>
            <a class="btn btn-sm btn-primary" @click="sendMessage" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Send</a>
        </div>
                    <div class="clearfix"></div>
        <!--<link rel="stylesheet" href="css/inspinia/plugins/summernote/summernote.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="css/inspinia/plugins/summernote/summernote-bs3.css" type="text/css" />-->
    </div>
</template>

<script>
    //import "../../../../plugins/summernote/jquery-2.1.1.js";
    //import "../../../../plugins/summernote/jquery-ui.js";
    //import "../../../../plugins/summernote/bootstrap.js";
    import "../../../../plugins/summernote2/summernote.js";

    import {mapActions} from 'vuex';
    //import {mapGetters} from 'vuex';
    
    export default {
        data() {
            return {
                //summernote: false
                active: true,
                messageText: "",
                placeholder: "Start typing your message...",
                noMessage: false,
            }    
        },
        //SUMMERNOTE
        mounted() {
            $('.summernote').summernote();
            console.log('mounted');
        },
        methods: {
            ...mapActions({
                callSendMessage: 'sendMessage'    
            }),
            // ...mapGetters({
            //     getUser: 'getUser'
            // }),
            initSummernote() {
                this.active = !(this.active);
                //this.summernote = !(this.summernote);
                //this.summernote = true;
                /*if(this.summernote) {
                    $('.summernote').summernote();
                }*/
            },
            sendMessage() {
                const message = {
                    messageText: this.messageText,
                    user: this.$store.state.user.user.name,
                    avatar: this.$store.state.user.user.avatar
                };
                if (this.messageText) {
                    this.callSendMessage(message);
                    this.messageText = "";
                    if (this.noMessage) {
                        this.placeholder = "Start typing your message...";
                        this.noMessage = false;
                    }
                } else {
                    this.placeholder = "Please type your message...";
                    this.noMessage = true;
                }
            }        
        }
    }
    
</script>

<style scoped lang="scss">
    $balloon-composer-color:#CEE7F7;
    
   .hide {
       display: none;
   }
   
   .box {
       background-color: $balloon-composer-color;
   }
   
   .box:before {
       display: none;
   }
   
   .box:after {
       display: none;
   }
   
   .danger {
		background-color: #F7C6CE;
	}
</style>