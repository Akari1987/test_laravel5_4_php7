<template>
    <div id="app-mongo-talk">
        <!--<div class="card p-3 mb-3">-->
        <v-card class="pa-3 mb-3">
            <tbody>
                <tr>
                    <td rowspan="2">
                        <img :src="getUserPic(tUsers[tGroup.latestMessage.user_id].avatar)" class="ui avatar image tiny">
                    </td>
                    <td>{{ tGroup.group.user_id }}</td>
                    <td class="text-xs-right">{{ tGroup.latestMessage.updated_at }}</td>
                </tr>
                <tr>
                    <td>{{ tGroup.latestMessage.body }}</td>
                </tr>
            </tbody>
        <!--</div>-->
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
    }
    
    .avatar {
        width: 38px;
    }
</style>