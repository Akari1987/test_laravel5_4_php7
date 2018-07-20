<template>
    <div class="app-stream-panel col-lg-6 col-mg-6">
        <!--<li>-->
        <!--    <div class="dropdown-messages-box">-->
        <!--        <a href="profile.html" class="pull-left">-->
        <!--            <img alt="image" class="img-circle" src="../../../../img/1.jpg">-->
        <!--        </a>-->
        <!--        <div class="media-body">-->
        <!--            <small class="pull-right">46h ago</small>-->
        <!--            <strong>哲也</strong> started following <strong>愛子</strong>. <br>-->
        <!--            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</li>-->
        <!--<hr>-->
        <!--<li class="divider"></li>-->
        <!--<li>-->
        <!--    <div class="dropdown-messages-box">-->
        <!--        <a href="profile.html" class="pull-left">-->
        <!--            <img alt="image" class="img-circle" src="../../../../img/2.jpg">-->
        <!--        </a>-->
        <!--        <div class="media-body ">-->
        <!--            <small class="pull-right text-navy">5h ago</small>-->
        <!--            <strong>太郎</strong> started following <strong>次郎</strong>. <br>-->
        <!--            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</li>-->
        <!--<hr>-->
        <!--<li class="divider"></li>-->
        <!--<li>-->
        <!--    <div class="dropdown-messages-box">-->
        <!--        <a href="profile.html" class="pull-left">-->
        <!--            <img alt="image" class="img-circle" src="../../../../img/3.jpg">-->
        <!--        </a>-->
        <!--        <div class="media-body ">-->
        <!--            <small class="pull-right">23h ago</small>-->
        <!--            <strong>次郎</strong> love <strong>三郎</strong>. <br>-->
        <!--            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</li>-->
        <!--<hr>-->
        <!--<li class="divider"></li>-->
        <!--<li>-->
        <!--    <div class="text-center link-block">-->
        <!--        <a href="mailbox.html">-->
        <!--            <i class="fa fa-envelope"></i> <strong>Read More</strong>-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</li>-->
        <div class="ibox-content">
            <div class="feed-activity-list">
                <app-stream-group-latest v-for="streamLatest in streamLatests"
                :m="streamLatest"
                :key="streamLatest.id"></app-stream-group-latest>
            </div>
            <div class="feed-activity-list">

                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a1.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right text-navy">1m ago</small>
                        <strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        <div class="actions">
                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                        </div>
                    </div>
                </div>

                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/profile.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">5m ago</small>
                        <strong>Monica Smith</strong> posted a new blog. <br>
                        <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                    </div>
                </div>

                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a2.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">2h ago</small>
                        <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                        <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                        <div class="well">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                            <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                        </div>
                    </div>
                </div>
                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a3.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">2h ago</small>
                        <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">2 days ago at 8:30am</small>
                        <div class="photos">
                            <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p1.jpg"></a>
                            <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p3.jpg"></a>
                            </div>
                    </div>
                </div>
                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a4.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right text-navy">5h ago</small>
                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                        <div class="actions">
                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                        </div>
                    </div>
                </div>
                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a5.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">2h ago</small>
                        <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                        <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                        <div class="well">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                        </div>
                    </div>
                </div>
                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/profile.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">23h ago</small>
                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                    </div>
                </div>
                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="img/a7.jpg">
                    </a>
                    <div class="media-body ">
                        <small class="pull-right">46h ago</small>
                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

        </div>

    </div>
</template>

<script>
    import StreamGroupLatest from './StreamGroupLatest.vue';

    export default {
        components: {
            'app-stream-group-latest': StreamGroupLatest 
        },
        data() {
            return {
                messages: [],
            }
        },
        computed: {
            streamLatests() {
                return this.$store.getters.getStreamLatests
            }
        },
        mounted() {
            /* Get MongoTalks */
            /* Get streamMessages->groups[_id, user_ids]+->allUsers[name, avatar] */
            axios.get('/getTalks').then(response => {
                this.$store.commit('SET_MESSAGEBOX_USERS', response.data.users);
                this.$store.commit('SET_STREAM_LATEST', response.data.groups);
                console.log(response.data);
                let target = response.data.groups;
                for(var i=0; i < target.length; i++)
                {
                    const ids = target[i].group.user_id;
                    const userDatas = [];
                    for(var i2=0; i2 < ids.length; i2++)
                    {
                        const userData = this.$store.state.messageboxUsers.messageboxUsers.find(obj => obj.id === ids[i2]);
                        userDatas[i2] = userData;
                    }
                    target[i].group.userData = userDatas;
                }
                this.$store.commit('SET_STREAM_GROUPS', target);
            })
        }
    }
</script>

<style lang="scss" scoped>
li {
    display: block;
}
    
hr {
    margin-top: 5px;
    margin-bottom: 5px;
}

.ibox-content {
    clear: none;
    border-radius: 10px;
}

.app-stream-panel {
    padding-bottom: 16px;
    
    li a {
        padding: 3px 20px;
        min-height: 0;
    }
}
</style>