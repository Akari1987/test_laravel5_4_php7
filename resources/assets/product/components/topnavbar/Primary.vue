<template>
    <nav class="cd-primary-nav">
        <div class="large-sidenavbar-button" v-if="isLarge === true">
            <a class="navbar-minimalize  btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
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
    import MessageNotification from './MessageNotification.vue'

    export default {
        components: {
            'app-message-notification': MessageNotification
        },
        data() {
            return {
                atLarge: true
            }
        },
        computed: {
            isLarge() {
                if(window.matchMedia('(min-width: 1024px)').matches)
                {
                    return true;
                } else
                {
                    return false;
                }
            }
        }
    }
</script>

<style>
    .cd-primary-nav {
        width: 100%;
        /*padding-right: 59.56px;*/
    }

    .large-sidenavbar-button {
        float: left;
        position: relative;
        top: 21px;
        left: 15px;
    }
</style>