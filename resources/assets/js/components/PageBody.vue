<template>
    <div id="page-body" class="swiper1">
        <swiper :options="swiperOption" ref="swiper">
            <swiper-slide class="menu" v-if="isNotLarge === true">
                <sidenavbar></sidenavbar>
            </swiper-slide>
            <swiper-slide class="content">
                <!--<div class="isLarge z-index-10002" v-if="isNotLarge == false">-->
                <!--    <app-large-topbar></app-large-topbar>-->
                <!--</div>-->
                <!--<div class="isNotLarge z-index-10000" v-if="isNotLarge == true">-->
                <topnavbar></topnavbar>
                <main class="cd-main-content">
                    <nav class="navbar navbar-static-top navbar-left" role="navigation">
                        <div class="menu-button" @click="toggleMenu">
                            <div class="navbar-header">
                                <a class="navbar-minimalize　minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            </div>
                        </div>
                    </nav>
                    <!--<router-view name="streamboxnavbar"></router-view>-->
                    <div class="wrapper wrapper-content">
                        <router-view></router-view>
                    </div>
                </main>
            </swiper-slide>
        </swiper>
        <!--<notification :id=user.id></notification>-->
        <!--<notification></notification>-->
    </div>
</template>

<script>
    import {displayMixin} from '../mixins/displayMixin';
    // import LargeSidenavbarButton from './sidenavbar/LargeSidenavbarButton.vue';
    import LargeTopbar from './topnavbar/LargeTopnavbar.vue';
    
    export default {
        mixins: [displayMixin],
        data() {
            let self = this
            return {
                menuCross: false,
                swiperOption: {
                    slidesPerView: 'auto',
                    initialSlide: 1,
                    resistanceRatio: .00000000000001,
                    // slideToClickedSlide: true
                },
            }
        },
        computed: {
            swiper() {
                return this.$refs.swiper.swiper
            },
            user() {
               return this.$store.state.user.user;
           }
        },
        methods: {
            toggleMenu() {
                if (this.swiper.previousIndex == 0) this.swiper.slidePrev()
            }
        },
        components: {
            // 'app-large-sidenavbar-button' : LargeSidenavbarButton,
            'app-large-topbar': LargeTopbar
        },
    }
</script>

<style scoped>
    @media (min-width: 1024px) {
        .menu, .menu-button {
            display: none;
        }
    }
    
    .navbar-left {
        float: left;
    }

    .swiper-slide {
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        flex: none;
        z-index: 10003;
    }
    
    .swiper-container {
        z-index: 10000;
    }
    
    .menu {
        min-width: 100px;
        width: 70%;
        max-width: 220px;
        top: 0px;
        /*left: 220px;*/
        position: sticky;
        /*flex-direction: column;*/
        /*position: relative;*/
        /*background-color: #2C8DFB!important;*/
        /*color: #fff;*/
    }
    
    .navbar-static-side {
        flex: none;
        position: sticky;
        bottom: 0;
    }
    
    div.menu::after {
        content: "";
        height: 100%;
        width: 1px;
    }
    
  .content {
    width: 100%;
  }
  .menu-button {
    position: fixed;
    top: -70px; left: 0px;
    padding: 15px;
    z-index: 1001;
    cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
    /*margin: 14px;
    border-radius: 5px;*/
  }
  
    .isLarge {
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        z-index: 10002;
    }
    
    .isNotLarge {
        position: sticky;
        top: 0px;
        width: 100%;
        z-index: 10000;
    }
</style>