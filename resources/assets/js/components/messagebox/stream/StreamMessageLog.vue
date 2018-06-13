<template>
    <div class="app-stream-message-log">
        <div class="feed-element">
            <div v-for="log in logs">
                <a href="#" class="pull-left">
                    <img :src="getUserPic(log.avatar)" class="img-circle image-responsive m-b-md">
                </a>
                <div class="media-body">
                    <small class="pull-right">{{ log.created_at }}</small>
                    <strong>{{ log.name }}</strong><br />
                    <div class="well">
                        {{ log.body }}
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>
</template>

<script>
    import {getUserPicMixin} from '../../../mixins/getUserPicMixin';
    
    export default {
        mixins: [getUserPicMixin],
        computed: {
            logs() {
                // ** 配列内オブジェクトの結合 ** //
                const logUserData = [];
                for(var i=0; i < this.$store.state.messageboxStreamLogs.streamLogs.length; i++)
                {
                    const id = this.$store.state.messageboxStreamLogs.streamLogs[i].user_id;
                    // ** messageboxUsers の中から messageboxUsers.id が const id と一致するものを返す** //
                    const avatar = this.$store.state.messageboxUsers.messageboxUsers.find(obj => obj.id === id);
                    logUserData.push(avatar);
                }
                const ob = this.$store.state.messageboxStreamLogs.streamLogs;
                for(var i=0;i < this.$store.state.messageboxStreamLogs.streamLogs.length; i++)
                {
                    $.extend(ob[i], logUserData[i]);
                }
                return ob;
            },
        },
    }
</script>

<style lang="scss" scoped>
    .feed-element {
        margin-top: 15px;
        
        a {
            margin-right: 10px;
        }
    }
</style>