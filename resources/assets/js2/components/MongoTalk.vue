<template>
    <div id="app-mongo-talk">
        <v-card class="pa-2 mb-3">
            <v-layout row wrap>
                <v-flex xs12 sm2 md2 child-flex>
                    <v-avatar size="100%">
                        <img :src="getUserPic(tUsers[tGroup.latestMessage.user_id].avatar)">
                    </v-avatar>
                </v-flex>
                <v-flex md10 child-flex>
                    {{ tGroup.group.user_id }}
                    {{ tGroup.latestMessage.body }}
                </v-flex>
            </v-layout>
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
    }
    
    /*table {*/
    /*    width: 100%;*/
    /*}*/
    
    .avatar {
        width: 100%;
    }
</style>