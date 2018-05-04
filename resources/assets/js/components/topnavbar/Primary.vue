<template>
    <nav class="cd-primary-nav">
        <div class="large-sidenavbar-button">
            <!--<a class="navbar-minimalize  btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>-->
            <a class="btn btn-primary" href="#" @click="primeButton"
                v-scroll-to="{
                    el: '.content',
                    x: true,
                    y: false
                    }"><i class="fa fa-bars"></i> </a>
        </div>
        <app-message-notification></app-message-notification>
		<a href="#cd-navigation" class="nav-trigger">
			<span>
				<em aria-hidden="true"></em>
				Menu
			</span>
		</a> <!-- .nav-trigger -->
 
		<ul id="cd-navigation">
			<li><a href="#0">The team</a></li>
			<li><a href="#0">Our Services</a></li>
			<li><a href="#0">Our Projects</a></li>
		</ul>
	</nav> <!-- .cd-primary-nav -->
</template>

<script>
    import {displayMixin} from '../../mixins/displayMixin';
    
    import MessageNotification from './MessageNotification.vue'

    export default {
        mixins: [displayMixin],
        components: {
            'app-message-notification': MessageNotification
        },
        data() {
            return {
                atLarge: true
            }
        },
        methods: {
            primeButton () {
                if (this.isLarge === true) {
                    // $("body").toggleClass("mini-navbar");
                    this.SmoothlyMenu();
                } else if (this.isNotLarge === true) {
                    $("body").removeClass("mini-navbar");
                }
            },
            SmoothlyMenu() {
                if (!$('body').hasClass('mini-navbar') || $('body').hasClass('body-small')) {
                    // Hide menu in order to smoothly turn on when maximize menu
                    $('#side-menu').hide();
                    // For smoothly turn on menu
                    setTimeout(
                        function () {
                            $('#side-menu').fadeIn(400);
                        }, 200);
                } else if ($('body').hasClass('fixed-sidebar')) {
                    $('#side-menu').hide();
                    setTimeout(
                        function () {
                            $('#side-menu').fadeIn(400);
                        }, 100);
                } else {
                    // Remove all inline style from jquery fadeIn function to reset menu state
                    $('#side-menu').removeAttr('style');
                }
            }
        }
    }
</script>

<style>
    .cd-primary-nav {
        width: 100%;
    }

    .large-sidenavbar-button {
        float: left;
        position: relative;
        top: 21px;
        left: 15px;
    }
</style>