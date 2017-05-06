<template>
    <div class="container">
        <!--<app-vue-html-editor name="html-editor" :model.sync="text"></app-vue-html-editor>-->
        <div style="margin-top:40px">
            <div> The HTML contents are as folows:</div>
            <hr>
            <div >{{text}}</div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                text: "Some text"
            }
        }
    }
</script>