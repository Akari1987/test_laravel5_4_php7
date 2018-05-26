<template>
    <div id="page-body" class="swiper1">
        <swiper :options="swiperOption1" ref="swiper">
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
                    <!--<router-view name="streamboxnavbar"></router-view>-->
                    <div class="wrapper wrapper-content">
                        <router-view></router-view>
                    </div>
                </main>
            </swiper-slide>
        </swiper>
        <!--<v-app-->
        <!--    height="100%"-->
        <!--    dark-->
        <!--    id="e3"-->
        <!--    standalone-->
        <!-->-->
        <!--    <v-navigation-drawer-->
        <!--        class="pb-0"-->
        <!--        persistent-->
        <!--        absolute-->
        <!--        height="100%"-->
        <!--        clipped-->
        <!--        enable-resize-watcher-->
        <!--        v-model="drawer"-->
        <!--    >-->
        <!--        <sidenavbar></sidenavbar>-->
        <!--    </v-navigation-drawer>-->
        <!--    <v-toolbar class="red">-->
        <!--        <v-toolbar-title>-->
        <!--            <v-toolbar-side-icon @click.native.stop="drawer = !drawer"></v-toolbar-side-icon>-->
        <!--            <v-icon class="ml-3">fa-youtube</v-icon>-->
        <!--        </v-toolbar-title>-->
        <!--        <v-spacer></v-spacer>-->
        <!--        <v-text-field-->
        <!--            label="Search..."-->
        <!--            single-line-->
        <!--            append-icon="search"-->
        <!--            dark-->
        <!--            hide-details-->
        <!--        ></v-text-field>-->
        <!--    </v-toolbar>-->
        <!--</v-app>-->
        <!--<notification :id=user.id></notification>-->
        <!--<notification></notification>-->
    </div>
</template>

<script>
    import {mapActions} from 'vuex';
    import {displayMixin} from '../mixins/displayMixin';
    
    export default {
        mixins: [displayMixin],
        data() {
            return {
                swiperOption1: {
                    slidesPerView: 'auto',
                    initialSlide: 1,
                    resistanceRatio: 0,
                    slidesPerView: 'auto',
                    slideToClickedSlide: true,
                    watchOverFlow: true,
                    noSwipingSelector: "",
                    nested: true,
                    debugger: true,
                    on: {
                  touchStart: function () {
                     console.log('init')
                  },
                 }
                },
                drawer: true,
            }
        },
        computed: {
            user() {
               return this.$store.state.user.user;
            },
            swiper() {
                return this.$refs.swiper.swiper
            },
            direction() {
                return this.$refs.swiper.swiper.touches
            }
        },
        methods: {
            ...mapActions({
                setSwiper: 'swiper_setSwiper',
                testFunc2: 'testFunc2'
            }),
            toggleMenu() {
                if (this.swiper.activeIndex === 0) {
                    this.swiper.slideNext()
                } else {
                    this.menuCross = false
                    this.swiper.slidePrev()
                }
            },
            setPageSwiper() {
                const provide = this.swiper;
                this.setSwiper(provide);
            },
        },
        mounted() {
            this.setPageSwiper();
        }
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
  /*.menu-button {*/
  /*  position: fixed;*/
  /*  top: -70px; left: 0px;*/
  /*  padding: 15px;*/
  /*  z-index: 1001;*/
  /*  cursor: pointer;*/
  /*  -webkit-transition: .3s;*/
  /*  transition: .3s;*/
  /*  margin: 14px;*/
  /*  border-radius: 5px;*/
  /*}*/
  
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