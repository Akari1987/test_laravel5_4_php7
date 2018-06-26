<template>
    <div class="app-stream-group-latest">
        <div class="feed-element">
            <a href="#" @click="loadMessages()">
                <a href="#" class="pull-left">
                    <img :src="getUserPic(latestMessageUsersData.avatar)" class="img-circle image-responsive m-b-md">
                </a>
                <div class="members">
                    <div class="member" v-for="member in groupMembers">
                        <a href="#" class="pull-left">
                            <img :src="getUserPic(member.avatar)" class="img-circle image-responsive m-b-md">
                        </a>
                    </div>
                </div>
                <div class="media-body">
                    <small class="pull-right">{{ m.latestMessage.created_at }}</small>
                    <strong>{{ latestMessageUsersData.name }}</strong><br />
                    <div class="well">
                        {{ m.latestMessage.body }}
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
    import {getUserPicMixin} from '../../../mixins/getUserPicMixin';
    
    export default {
        props: ['m'],
        mixins: [getUserPicMixin],
        data() {
            return {
                latestMessageUsersData: [],
            }
        },
        computed: {
            groupMembers() {
                var result = null;
                const groupId = this.m.group._id;
                const streamGroups = this.$store.getters.getStreamGroups;
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
            }
        },
        mounted() {
            const id = this.m.latestMessage.user_id;
            const result = this.$store.state.messageboxUsers.messageboxUsers.find(obj => obj.id === id);
            this.latestMessageUsersData = result; //**latest message user data**//
            // console.log(this.m);
            //
            // var result = null;
            // const groupId = this.m.group._id;
            // const streamGroups = this.$store.state.messageboxStreamlogs.streamGroups;
            // const streamGroups = this.$store.getters.getStreamGroups;
            // this.result = streamGroups;
            // return streamGroups;
        },
        methods: {
            loadMessages() {
                // **load clicked messageGroup**
                axios.get('/getGroupStreamMessages', {params: {
                    id: this.m.group._id
                }}).then(response => {
                    const payload = {};
                    payload['groupId'] = this.m.group._id;
                    payload['logs'] = response.data;
                    // payload['users'] = this.store.state.str
                    this.$store.commit('SET_STREAM_LOGS', payload);
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
</style>