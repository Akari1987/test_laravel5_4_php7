<template>
    <div class="app-stream-message-log">
        <div class="feed-element">
            <div class="logsHeader">
                <div class="members  m-b-md">
                    <table>
                        <tr>
                            <td class="p-xxs">chat members: </td>
                            <td class="member" v-for="member in groupMembers">
                                <a href="#">
                                    <img :src="getUserPic(member.avatar)" class="img-circle image-responsive">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div v-for="log in logs">
                <a href="#" class="pull-left">
                    <img :src="getUserPic(log.avatar)" class="img-circle image-responsive m-b-md">
                </a>
                <div class="media-body">
                    <small class="pull-right">{{ log.created_at }}</small>
                    <strong>{{ log.name }}</strong><br />
                    <div class="well">
                        {{ log.body }}
                        <div class="pull-right">
                            <a href="#" @click="deleteMessage(log._id)">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>
</template>

<script>
    import {getUserPicMixin} from '../../../mixins/getUserPicMixin';
    import {loadGroupMessagesMixin} from '../../../mixins/loadGroupMessagesMixin';
    
    export default {
        mixins: [getUserPicMixin, loadGroupMessagesMixin],
        computed: {
            groupMembers() {
                var result = null;
                const groupId = this.$store.getters.getCurrentStreamGroup;
                const streamGroups = this.$store.getters.getStreamGroups;
                if(groupId)
                {
                    for(var i=0; i < streamGroups.length; i++)
                    {
                        if(streamGroups[i].group._id === groupId)
                        {
                            result = streamGroups[i];
                        }
                        if(result)
                        {
                            break;   
                        }
                    }
                    return result.group.userData;
                } else {
                    return null;
                }
            },
            logs() {
                // ** 配列内オブジェクトの結合 ** //
                const logUserData = [];
                for(var i=0; i < this.$store.state.messageboxStreamLogs.streamLogs.logs.length; i++)
                {
                    const id = this.$store.state.messageboxStreamLogs.streamLogs.logs[i].user_id;
                    // ** messageboxUsers の中から messageboxUsers.id が const id と一致するものを返す** //
                    const avatar = this.$store.state.messageboxUsers.messageboxUsers.find(obj => obj.id === id);
                    logUserData.push(avatar);
                }
                const ob = this.$store.state.messageboxStreamLogs.streamLogs.logs;
                for(var i=0; i < this.$store.state.messageboxStreamLogs.streamLogs.logs.length; i++)
                {
                    $.extend(ob[i], logUserData[i]);
                }
                return ob;
            },
        },
        methods: {
            deleteMessage(message_id) {
                const messageId = {
                    messageId: message_id
                };
                const groupId = this.$store.state.messageboxStreamLogs.streamLogs.groupId;
                axios.post('/deleteStreamMessage', messageId).then( (r) => {
                    if(r.data === 1)
                    {
                        this.loadGroupMessages(groupId);
                    }
                });
            }
        }
    }
</script>

<style lang="scss" scoped>
    .feed-element {
        margin-top: 15px;
        
        a {
            margin-right: 10px;
        }
    }
    .members {
        td {
            vertical-align: middle;
        }
    }
</style>