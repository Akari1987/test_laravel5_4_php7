<template>
    <div id="app-mongo-talk">
        <div class="card p-3 mb-3">
            <tbody>
                <tr>
                    <td rowspan="2">
                        <img :src="getUserPic(tUsers[tGroup.latestMessage.user_id].avatar)" class="ui avatar image tiny">
                    </td>
                    <td>{{ tGroup.group.user_id }}</td>
                </tr>
                <tr>
                    <td>{{ tGroup.latestMessage.body }}</td>
                </tr>
            </tbody>
        </div>
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