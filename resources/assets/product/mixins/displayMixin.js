/* To change content by dispaly size */

export const displayMixin = {
    data() {
        return {
            isLarge: '',
            isNotLarge: ''
        }
    },
    mounted() {
        if(window.matchMedia('(min-width: 1024px)').matches)
        {
            this.isLarge = true;
            this.isNotLarge = false;
        } else
        {
            this.isLarge = false;
            this.isNotLarge = true;
        }
        window.addEventListener('resize', this.screen);
    },
    methods: {
        screen: function () {
            if(window.matchMedia('(min-width: 1024px)').matches)
            {
                this.isLarge = true;
                this.isNotLarge = false;
            } else
            {
                this.isLarge = false;
                this.isNotLarge = true;
            }
        }
    },
}