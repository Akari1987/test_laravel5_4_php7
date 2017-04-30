<template>
	<nav class="navbar navbar-default">
	    <div class="container-fluid"><!--
		    <div class="navbar-header">
		        <router-link to="/" class="navbar-brand">Home</router-link>
		    </div>-->

		    <div class="nav navbar-top-links">
		        <ul class="nav navbar-nav">
		        	<router-link to="/stream" activeClass="active" tag="li"><a>Streams</a></router-link>
					<router-link to="/add" activeClass="active" tag="li"><a>Add Member</a></router-link>
					<router-link to="/email" activeClass="active" tag="li"><a>Mail Box [BETA]</a></router-link>
		        </ul>
		    </div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	</nav>
</template>