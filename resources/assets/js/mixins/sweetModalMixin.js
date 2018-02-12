export const sweetModalMixin = {
    methods: {
        openModal(ref) {
            // this.$refs.ref.open();
            const refs = this.$refs + '.' + ref;
            // console.log(this.$refs + '.' + ref);
            // refs.open();
            console.log(this.$refs.modal);
        }
    }
}