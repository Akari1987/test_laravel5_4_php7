<template>
    <nav class="cd-primary-nav">
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
            <!--<li class="dropdown">-->
            <!--    @if (Auth::guest())-->
            <!--        <li><a href="{{ route('login') }}">Login</a></li>-->
            <!--        <li><a href="{{ route('register') }}">Register</a></li>-->
            <!--    @else-->
            <!--        <li class="dropdown" id="auth_user">-->
            <!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">-->
            <!--                {{ Auth::user()->name }} <span class="caret"></span>-->
            <!--            </a>-->

            <!--            <ul class="dropdown-menu" role="menu">-->
            <!--                <li>-->
            <!--                    <a href="{{ route('logout') }}"-->
            <!--                        onclick="event.preventDefault();-->
            <!--                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>-->
            <!--                        Logout-->
            <!--                    </a>-->

            <!--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
            <!--                        {{ csrf_field() }}-->
            <!--                    </form>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--    @endif-->
            <!--</li> <!-- .dropdown -->
		</ul>
	</nav> <!-- .cd-primary-nav -->
</template>