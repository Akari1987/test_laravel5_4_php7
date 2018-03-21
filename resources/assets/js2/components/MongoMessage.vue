<template>
    <div id="mongo-message">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ m.body }}
            </div>
            <div class="panel-footer">
                {{ m.name }}
                <img :src="getUserPic(m.avatar)" class="img-circle circle-border m-b-md" :style="{ width: 38 + 'px'}">
            </div>
        </div>
    </div>
</template>

<script>
    import {getUserPicMixin} from '../../js/mixins/getUserPicMixin';
    
    export default {
        props: ['m'],
        mixins: [getUserPicMixin]
    }
</script>