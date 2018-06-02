<template>
    <div id="app-stream-message">
        <div class="feed-activity-list">
            <div class="feed-element">
                {{ m.body }}
                {{ m.name }}
                <a href="#" class="pull-left">
                    <img :src="getUserPic(m.avatar)" class="img-circle image-responsive m-b-md">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import {getUserPicMixin} from '../../../mixins/getUserPicMixin';
    
    export default {
        props: ['m'],
        mixins: [getUserPicMixin]
    }
</script>

<style scoped>
    .feed-element {
        margin-top: 15px;    
    }
</style>