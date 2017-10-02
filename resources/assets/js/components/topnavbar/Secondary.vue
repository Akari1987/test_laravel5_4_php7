<template>
    <div class="secondary">
        <nav class="cd-secondary-nav navbar navbar-static-top navbar-fixed" role="navigation">
            <ul>
                <router-link to="/stream" activeClass="active" tag="li"><a>Streams</a></router-link>
    			<router-link to="/member" activeClass="active" tag="li"><a>Member</a></router-link>
    			<router-link to="/email" activeClass="active" tag="li"><a>Mail Box</a></router-link>
            </ul>
      <!--     <ul>-->
    		<!--	<li><a class="active" href="#0">Intro</a></li>-->
    		<!--	<li><a href="#0">Features</a></li>-->
    		<!--	<li><a href="#0">Photos</a></li>-->
    		<!--	<li><a href="#0">Videos</a></li>-->
    		<!--	<li><a href="#0">Specs</a></li>-->
    		<!--	<li><a href="#0">Support</a></li>-->
    		<!--	<li><a href="#0">Compare</a></li>-->
    		<!--	<li><a href="#0">Buy</a></li>-->
    		<!--</ul>-->
        </nav>
 <!--       	<nav class="navbar navbar-default">-->
	<!--    <div class="container-fluid">-->
	<!--	    <div class="nav navbar-top-links">-->
		   <!--     <ul class="nav navbar-nav">-->
		   <!--     	<router-link to="/stream" activeClass="active" tag="li"><a>Streams</a></router-link>-->
					<!--<router-link to="/member" activeClass="active" tag="li"><a>Member</a></router-link>-->
					<!--<router-link to="/email" activeClass="active" tag="li"><a>Mail Box [BETA]</a></router-link>-->
		   <!--     </ul>-->
	<!--	    </div><!-- /.navbar-collapse -->
	<!--    </div><!-- /.container-fluid -->
	<!--</nav>-->
    </div>
</template>

<style scoped>
    .secondary {
        position: relative;
    }
    
    .cd-secondary-nav {
        /*width: 100%;*/
        height: 100%;
        vertical-align: middle;
    }
    
    .cd-secondary-nav li {
        width: 33.3%;
        text-align: center;
    }
</style>