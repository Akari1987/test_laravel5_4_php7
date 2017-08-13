<template>
    <div id="page-body">
        <nav class="navbar navbar-static-top navbar-left" role="navigation">
            <app-large-sidenavbar-button></app-large-sidenavbar-button>
        </nav>
        <swiper :options="swiperOption" ref="swiper">
        <swiper-slide class="menu">
            <sidenavbar></sidenavbar>
        </swiper-slide>
        <swiper-slide class="content">
            <nav class="navbar navbar-static-top navbar-left" role="navigation">
                <div class="menu-button" @click="toggleMenu">
                    <div class="navbar-header">
                        <a class="navbar-minimalize　minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </nav>
            <router-view name="streamboxnavbar"></router-view>
            <router-view></router-view>
        </swiper-slide>
      </swiper>
    </div>
</template>

<script>
    import LargeSidenavbarButton from './sidenavbar/LargeSidenavbarButton.vue';
    
    export default {
        data() {
           let self = this
            return {
                menuCross: false,
                swiperOption: {
                    slidesPerView: 'auto',
                    initialSlide: 1,
                    resistanceRatio: .00000000000001,
                    slideToClickedSlide: true
                }
            }
        },
        computed: {
            swiper() {
                return this.$refs.swiper.swiper
            }
        },
        methods: {
            toggleMenu() {
                if (this.swiper.previousIndex == 0) this.swiper.slidePrev()
            }
        },
        components: {
            'app-large-sidenavbar-button' : LargeSidenavbarButton
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
    /*.navbar-left {*/
        /*float: left;*/
        /*width: 50%;*/
    /*}*/
    .swiper-slide {
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        flex: none;
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
  .menu-button .bar:nth-of-type(1) {
    margin-top: 0px;
  }
  .menu-button .bar:nth-of-type(3) {
    margin-bottom: 0px;
  }
  .bar {
    position: relative;
    display: block;
    width: 50px;
    height: 5px;
    margin: 10px auto;
    background-color: #fff;
    border-radius: 10px;
    -webkit-transition: .3s;
    transition: .3s;
  }
</style>