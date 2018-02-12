<template>
    <div class="message-notification">
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown" id="mail">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="">
                            </a>
                            <div class="media-body">
                                <small class="pull-right">46h ago</small>
                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right text-navy">5h ago</small>
                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right">23h ago</small>
                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="mailbox.html">
                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown" id="notification">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="grid_options.html">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="notifications.html">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <!--<li class="dropdown pm-message-notification">-->
        <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
        <!--        <i class="fa fa-envelope-o"></i>-->
                <!--<span class="label label-success" v-if="pmStore.notifications.length > 0">{{pmStore.notifications.length}}</span>-->
        <!--    </a>-->
        <!--    <ul class="dropdown-menu">-->
        <!--        <div class="context">Your private messages</div>-->
        
                <!--<div class="context" v-if="pmStore.notifications.length === 0">No unread Private messages</div>-->
        <!--        <div class="context">No unread Private messages</div>-->
        
                <!--<li class="notification" v-for="notification in pmStore.notifications" v-if="pmStore.notifications.length > 0">-->
                    <!--<router-link :to="{name: 'pm-view', params: { pmId: notification.id }}">-->
        <!--                <div>-->
                            <!--<span class="from">{{notification.sender.name}} <span class="time"><i class="fa fa-clock-o"></i> {{notification.created_at}}</span></span>-->
                            <!--<span class="subject">{{notification.subject}}</span>-->
        <!--                </div>-->
                    <!--</router-link>-->
                <!--</li>-->
        
        <!--        <div class="footer">-->
                  <!--<router-link :to="{name: 'my-pms'}">See all Private messages</router-link>-->
        <!--        </div>-->
        
        <!--    </ul>-->
        <!--</li>-->
    </div>
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        computed: {
            ...mapState({
                pmStore: state => state.privateMessageStore,
                userStore: state => state.userStore
            })
        }
    }
</script>

<style lang="scss">
  .pm-message-notification {
    &.open {
      background-color: #e7e7e7;
    }
    .context {
      color: #999999;
      width: 300px;
      padding: 5px 10px 9px 10px;
      border-bottom: 1px solid #e7e7e7;
      overflow: hidden;
    }
    li.notification {
      border-bottom: 1px solid #e7e7e7;
      &:last-child {
        border-bottom: none;
      }
      padding: 5px 5px 5px 0px;
      span {
        display: block;
        &.from {
          color: #444444;
          .time {
            font-size: 0.7em;
            float: right;
          }
        }
        &.subject {
          font-size: 0.8em;
        }
      }
    }
    .footer {
      text-align: center;
    }
  }
</style>