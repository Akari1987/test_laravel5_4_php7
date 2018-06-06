<template>
    <div id="app-stream-message">
        <div class="feed-activity-list">
            <div class="feed-element">
                {{ messageboxUsersData.name }}
                {{ m.latestMessage.body }}
                <a href="#" class="pull-left">
                    <img :src="getUserPic(messageboxUsersData.avatar)" class="img-circle image-responsive m-b-md">
                </a>
            </div>
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
                messageboxUsersData: []
            }
        },
        mounted() {
            const id = this.m.latestMessage.user_id;
            const result = this.$store.state.messageboxUsers.messageboxUsers.find(obj => obj.id === id);
            this.messageboxUsersData = result;
        }
    }
</script>

<style scoped>
    .feed-element {
        margin-top: 15px;    
    }
</style>