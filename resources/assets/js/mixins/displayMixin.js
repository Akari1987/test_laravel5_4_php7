/* To change content by dispaly size */

export const displayMixin = {
    computed: {
        isLarge() {
            if(window.matchMedia('(min-width: 1024px)').matches)
            {
                return true;
            } else
            {
                return false;
            }
        },
        isNotLarge() {
            if(window.matchMedia('(max-width: 1024px)').matches)
            {
                return true;
            } else
            {
                return false;
            }
        }
    }
}