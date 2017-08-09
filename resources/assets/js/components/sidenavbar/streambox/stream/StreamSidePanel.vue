<template>
    <div class="vue-stream-side-panel col-lg-3">
        <li>
            <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                    <img alt="image" class="img-circle" src="../../../../img/1.jpg">
                </a>
                <div class="media-body">
                    <small class="pull-right">46h ago</small>
                    <strong>哲也</strong> started following <strong>愛子</strong>. <br>
                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                </div>
            </div>
        </li>
        <hr>
        <li class="divider"></li>
        <li>
            <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                    <img alt="image" class="img-circle" src="../../../../img/2.jpg">
                </a>
                <div class="media-body ">
                    <small class="pull-right text-navy">5h ago</small>
                    <strong>太郎</strong> started following <strong>次郎</strong>. <br>
                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                </div>
            </div>
        </li>
        <hr>
        <li class="divider"></li>
        <li>
            <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                    <img alt="image" class="img-circle" src="../../../../img/3.jpg">
                </a>
                <div class="media-body ">
                    <small class="pull-right">23h ago</small>
                    <strong>次郎</strong> love <strong>三郎</strong>. <br>
                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                </div>
            </div>
        </li>
        <hr>
        <li class="divider"></li>
        <li>
            <div class="text-center link-block">
                <a href="mailbox.html">
                    <i class="fa fa-envelope"></i> <strong>Read More</strong>
                </a>
            </div>
        </li>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style type="text/css">
    stream-side-panel {
    border: medium none;
    border-radius: 3px;
    box-shadow: 0 0 3px rgba(86, 96, 117, 0.7);
    display: none;
    float: left;
    font-size: 12px;
    left: 0;
    list-style: none outside none;
    padding: 0;
    position: absolute;
    text-shadow: none;
    top: 100%;
    z-index: 1000;
    
}
    li {
        display: block;
    }
    
    hr {
        margin-top: 5px;
        margin-bottom: 5px;
    }


 .stream-side-panel li a {
  padding: 3px 20px;
  min-height: 0;
}
</style>