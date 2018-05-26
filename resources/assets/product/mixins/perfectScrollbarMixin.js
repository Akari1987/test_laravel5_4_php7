export const perfectScrollbarMixin = {
    // import Ps from 'perfect-scrollbar';
    
    mounted() {
        Ps.initialize(this.$refs.scrollWrapper);
    }
}