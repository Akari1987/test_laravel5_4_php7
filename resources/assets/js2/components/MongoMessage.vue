<template>
    <div id="mongo-message">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ m.body }}
            </div>
            <div class="panel-footer">
                {{ m.user_id }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['m'],
    }
</script>