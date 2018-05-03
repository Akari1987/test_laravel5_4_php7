<template>
    <div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.listen();
        },
        props: ['id'],
        computed: {
            user_id() {
                // return this.$store.state.user.user.id;
                return this.id;
            }
        },
        created() {
        //   console.log(this.user_id) 
        },
        // data() {
        //     return {
        //         user_id: this.id
        //     }
        // },
        methods: {
            listen() {
                // Echo.private('App.User.' + this.id)
                //     .notification( (notification) => {
                //         alert('New Notification');
                //         console.log(notification);
                //     })
            }
        }
    }
</script>