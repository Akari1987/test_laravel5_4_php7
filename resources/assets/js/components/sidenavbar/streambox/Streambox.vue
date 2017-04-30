<template>
    <li>
        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Vue Streambox </span><span class="label label-warning pull-right">16/24</span></a>
            <ul class="nav nav-second-level collapse">
                <li><router-link to="/stream">Stream</router-link></li>
                <li><router-link to="/email">Email view</router-link></li>
                <li><router-link to="/stream">One Time Message implement by WebRTC</router-link></li>
                
                <!--
                <li><a href="mailbox.html">Inbox</a></li>
                
                <li><a href="mail_compose.html">Compose email</a></li>
                <li><a href="email_template.html">Email templates</a></li>-->
            </ul>
    </li>
</template>

<script>
    import Stream from './stream/Stream.vue';
    //import Email from './email/Email.vue';
    
    export default {
        components: {
            'app-stream': Stream,
            
        }
    }
</script>