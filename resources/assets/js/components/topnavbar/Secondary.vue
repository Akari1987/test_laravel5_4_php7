<template>
    <div class="secondary">
        <nav class="cd-secondary-nav navbar navbar-static-top navbar-fixed" role="navigation">
            <div class="navbar-header">
                <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
        </nav>
 <!--       	<nav class="navbar navbar-default">-->
	<!--    <div class="container-fluid">-->
	<!--	    <div class="nav navbar-top-links">-->
	<!--	        <ul class="nav navbar-nav">-->
	<!--	        	<router-link to="/stream" activeClass="active" tag="li"><a>Streams</a></router-link>-->
					<!--<router-link to="/member" activeClass="active" tag="li"><a>Member</a></router-link>-->
	<!--				<router-link to="/email" activeClass="active" tag="li"><a>Mail Box [BETA]</a></router-link>-->
	<!--	        </ul>-->
	<!--	    </div><!-- /.navbar-collapse -->
	<!--    </div><!-- /.container-fluid -->
	<!--</nav>-->
    </div>
</template>

<style scoped>
    .secondary {
        position: relative;
        /*top: 0px;*/
    }
</style>