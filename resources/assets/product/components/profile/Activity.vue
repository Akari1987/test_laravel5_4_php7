<template>
    <div class="activity">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Activities</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content" id="">
                <div>
                    <div class="feed-activity-list">
                        <div class="feed-element" v-for="activity in activities">
                            <div class="media-body">
                                <img :src="getUserPic(user.avatar)" class="img-circle" alt="profile" width="80px">
                                <strong v-text=activity.who></strong><br />
                                <span v-text="activity.activity"></span>
                            </div>
                        </div>
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/a1.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right text-navy">1m ago</small>-->
                        <!--        <strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>. <br>-->
                        <!--        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>-->
                        <!--        <div class="actions">-->
                        <!--            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>-->
                        <!--            <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/profile.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right">5m ago</small>-->
                        <!--        <strong>Monica Smith</strong> posted a new blog. <br>-->
                        <!--        <small class="text-muted">Today 5:60 pm - 12.06.2014</small>-->

                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/a2.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right">2h ago</small>-->
                        <!--        <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>-->
                        <!--        <small class="text-muted">Today 2:10 pm - 12.06.2014</small>-->
                        <!--        <div class="well">-->
                        <!--            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.-->
                        <!--            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).-->
                        <!--        </div>-->
                        <!--        <div class="pull-right">-->
                        <!--            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>-->
                        <!--            <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>-->
                        <!--            <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/a3.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right">2h ago</small>-->
                        <!--        <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>-->
                        <!--        <small class="text-muted">2 days ago at 8:30am</small>-->
                        <!--        <div class="photos">-->
                        <!--            <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p1.jpg"></a>-->
                        <!--            <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p3.jpg"></a>-->
                        <!--            </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/a4.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right text-navy">5h ago</small>-->
                        <!--        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>-->
                        <!--        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>-->
                        <!--        <div class="actions">-->
                        <!--            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>-->
                        <!--            <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/a5.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right">2h ago</small>-->
                        <!--        <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>-->
                        <!--        <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>-->
                        <!--        <div class="well">-->
                        <!--            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.-->
                        <!--            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).-->
                        <!--        </div>-->
                        <!--        <div class="pull-right">-->
                        <!--            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/profile.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right">23h ago</small>-->
                        <!--        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>-->
                        <!--        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="feed-element">-->
                        <!--    <a href="#" class="pull-left">-->
                        <!--        <img alt="image" class="img-circle" src="img/a7.jpg">-->
                        <!--    </a>-->
                        <!--    <div class="media-body ">-->
                        <!--        <small class="pull-right">46h ago</small>-->
                        <!--        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>-->
                        <!--        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // var $ = require('jquery');
    // require('perfect-scrollbar/jquery')($);
    // var Ps = require('perfect-scrollbar');
    // import Ps from 'perfect-scrollbar';
    // var el = document.querySelector('.demo');
    // Ps.initialize(el);
    // $(function() {
    //     $('#demo').perfectScrollbar();
    //     // with vanilla JS!
    //     Ps.initialize(document.getElementById('demo'));
    // });
    import {mapGetters} from 'vuex';
    
    export default {
        computed: {
            ...mapGetters({
                activities: 'activityLogs'
            }),
            user() {
                return this.$store.state.user.user;
            }
        },
        methods: {
            getUserPic(path) {
                var match = String(path).match(/http/);
                if(match)
                {
                    return path;
                } else if(path == null)
                {
                    return '/users/avatar/default.png';
                } else
                {
                    return '/' + path;
                }
            }
        }
    }
</script>

<style>
    .ibox-content {
        position: relative;
    }
</style>