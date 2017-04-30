<template>
    <div class="balloon">
        <div class="box">
            <app-message></app-message>
            <div class="icon">
            <a href="profile.html" class="pull-left">
                <img alt="image" class="img-circle" src="../../../../img/a2.jpg">
            </a>
        </div>
        </div>
    </div>
</template>

<script>
    import Message from './Message.vue';

    export default {
        components: {'app-message': Message},
    }
</script>

<style type="text/css">


    .balloon {
        padding: 8px;
        padding-bottom: 28px;
        position: relative;
        z-index: 0;
    } 

    .box {
        position: relative;
        background: #ccc;
        margin-bottom: 20px;
        border-radius: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .box:after {
        content: '';
        position: absolute;
        height: 50px;
        width: 50px;
        border-radius: 25px;
        z-index: -1;
        background: #fff;
        bottom: -20px;
        left: 50px;
    }

    .box:before {
        content: '';
        position: absolute;
        height: 50px;
        width: 50px;
        border-radius: 25px;
        z-index: -1;
        background: #ccc;
        bottom: -15px;
        left: 35px;
    }    
    .feed-element img.img-circle,
.icon img.img-circle {
  width: 38px;
  height: 38px;
  margin-top: 15px;
  margin-left: 60px;
  
}
</style>