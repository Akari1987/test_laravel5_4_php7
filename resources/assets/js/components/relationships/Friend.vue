<template>
    <div class="friend">
        <tr>
            <router-link :to="'/user/' + f.id">
                <img :src="getUserPic(f.avatar)" class="img-circle" alt="profile" width="80px" @click="loadProfile(f.id)">
            </router-link>
            <td>
                <button class="btn btn-primary a-btn" @click="" :class="{ inactive: no}">
                    <span></span>
                    <span>Your friend</span>
                    <span>Unfriend</span>
                </button>
                <button class="btn btn-success" @click=""  :class="{ inactive: !no}">Send friend request</button>
            </td>
        </tr>
        <tr>
            {{ f.name }}
        </tr>
    </div>
</template>

<script>
    import axios from 'axios';
    import {mapActions} from 'vuex';
    import {getUserPicMixin} from '../../mixins/getUserPicMixin';
    
    export default {
        props: ['f'],
        mixins: [getUserPicMixin],
        data() {
            return {
                no: false,
                isFollowing: true,
                isHovering: false
            }
        },
    }
    
</script>