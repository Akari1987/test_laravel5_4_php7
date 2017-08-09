<template>
    <nav class="top-navigation navbar navbar-default navbar-static-top fixed-nav">
        <div class="nav navbar-top-links">
		    <ul class="nav navbar-nav">
		        <router-link to="/stream" activeClass="active" tag="li"><a>Home</a></router-link>
				<router-link to="/email" activeClass="active" tag="li"><a>Activity</a></router-link>
				<router-link :to="'user/' + user.name" activeClass="active" tag="li"><a>{{ user.name }}</a></router-link>
				<li class="dropdown">
                    <!--             Authentication Links -->
                    <!--@if (Auth::guest())-->
                    <!--    <li><a href="{{ route('login') }}">Login</a></li>-->
                    <!--    <li><a href="{{ route('register') }}">Register</a></li>-->
                    <!--@else-->
                    <li class="dropdown" id="auth_user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ user.name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a @click="logout"><i class="fa fa-sign-out"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    <!--{{ csrf_field() }}-->
                                </form>
                            </li>
                        </ul>
                    </li>
                </li>
		    </ul>
		</div>
    </nav>
</template>

<script>
	var csrf_token = $('meta[name="csrf-token"]').attr('content');
	import axios from 'axios';
	
	export default {
		computed: {
			user() {
				return this.$store.state.user.user;
			}
		},
		methods: {
			logout() {
				axios.post('/logout', {
					_token: csrf_token
				});
			}
		}
	}
</script>

<style type="text/css">
	.fixed-top {
		position: fixed;
		/*display: block;*/
		text-align: center;
		background-color: #FFF;
		width: 100%;
	}
</style>