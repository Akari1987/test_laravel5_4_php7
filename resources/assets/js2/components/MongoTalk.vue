<template>
    <div id="app-mongo-talk">
        <div class="panel panel-default">
            {{ tGroup.latestMessage.body }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['tUsers', 'tGroup']
    }
</script>