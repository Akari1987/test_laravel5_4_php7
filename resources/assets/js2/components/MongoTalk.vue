<template>
    <div id="app-mongo-talk">
        <v-card class="pa-2 mb-3">
            <table>
                <tbody>
                    <tr>
                        <td rowspan="2">
                            <v-avatar>
                                <img :src="getUserPic(tUsers[tGroup.latestMessage.user_id].avatar)">
                            </v-avatar>
                        </td>
                        <td>{{ tGroup.group.user_id }}</td>
                        <td class="text-xs-right caption">{{ tGroup.latestMessage.updated_at }}</td>
                    </tr>
                    <tr>
                        <td>{{ tGroup.latestMessage.body }}</td>
                    </tr>
                </tbody>
            </table>
        </v-card>
    </div>
</template>

<script>
    import Log from './Log.vue';
    
    import {getUserPicMixin} from '../../js/mixins/getUserPicMixin';
    
    export default {
        props: ['tUsers', 'tGroup'],
        mixins: [getUserPicMixin],
        components: {
            'app-log': Log
        }
    }
</script>

<style scoped>
    .card {
        border-radius: 10px;
        vertical-align: middle;
        min-height: 95px;
    }
    
    /*table {*/
    /*    width: 100%;*/
    /*}*/
    
    .avatar {
        width: 38px;
        margin-right: 10px;
        min-height: 95px;
    }
</style>