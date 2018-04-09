<template>
    <div id="mongo-form" class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 panel-body">
                <div class="form-group">
                    <input type="text" v-model="messageText" :placeholder="placeholder" name=""/>
                    <select v-model="selected">
                        <option disabled value="">Please select one</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                    <span>Selected: {{ selected }}</span>
                </div>
                <button class="btn btn-primary" @click="sendMessage">Submit a comment</button>
                <button class="btn btn-warning" @click="editMessage">Edit</button>
                <button class="btn btn-danger" @click="deleteMessage">Delete</button>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';
    
    export default {
        data() {
            return {
                selected: "",
                messageText: "",
                placeholder: 'Start typing your message...',
                noMessage: false
            }
        },
        methods: {
            ...mapActions({
                callSendMessage: 'stream_sendMessage'
            }),
            sendMessage: function () {
                const message = {
                    messageText: this.messageText,
                    user: this.$store.state.user.user.name,
                    avatar: this.$store.state.user.user.avatar
                };
                if (this.messageText)
                {
                    this.callSendMessage(message);
                    const messageForServer = message;
                    messageForServer.group = this.selected;
                    console.log(messageForServer);
                    axios.post('/cMongoMessage', messageForServer);
                    this.messageText = "";
                    if (this.noMessage)
                    {
                        this.placeholder = "Start typing your message...";
                        this.noMessage = false;
                    }
                } else
                {
                    this.placeholder = "Please type your message...";
                    this.noMessage = true;
                }
            },
            editMessage: function () {
                axios.get('/testtest');
            },
            deleteMessage: function () {
                
            }
        },
        created() {
            axios.get('/getTalks');
        }
    }
</script>