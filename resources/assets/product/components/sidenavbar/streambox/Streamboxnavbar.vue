<template>
	<nav class="navbar navbar-default">
	    <div class="container-fluid">
		    <div class="nav navbar-top-links">
		        <ul class="nav navbar-nav">
		        	<router-link to="/stream" activeClass="active" tag="li"><a>Streams</a></router-link>
					<!--<router-link to="/member" activeClass="active" tag="li"><a>Member</a></router-link>-->
					<router-link to="/email" activeClass="active" tag="li"><a>Mail Box [BETA]</a></router-link>
		        </ul>
		    </div>
	    </div>
	</nav>
</template>

<style scoped>
	.navbar {
		position: relative;
	}
</style>