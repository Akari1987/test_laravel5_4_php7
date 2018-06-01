<template>
    <li>
        <a>
            <i class="fa fa-envelope"></i>
            <span class="nav-label">Vue Streambox </span>
            <span class="label label-warning pull-right">16/24</span>
        </a>
        <ul class="nav nav-second-level collapse">
            <li><router-link to="/messagebox/stream">Stream</router-link></li>
            <li><router-link to="/messagebox/email">Email view</router-link></li>
            <!--<li><router-link to="/stream">One Time Message implement by WebRTC</router-link></li>-->
        </ul>
    </li>
</template>
