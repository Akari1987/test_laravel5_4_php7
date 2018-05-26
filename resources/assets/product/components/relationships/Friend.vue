<template>
    <!--<div class="friend">-->
    <!--    <tr>-->
    <!--        <router-link :to="'/user/' + f.id">-->
    <!--            <img :src="getUserPic(f.avatar)" class="img-circle" alt="profile" width="80px" @click="loadProfile(f.id)">-->
    <!--        </router-link>-->
    <!--        <td>-->
    <!--            <button class="btn btn-primary a-btn" @click="" :class="{ inactive: no}">-->
    <!--                <span></span>-->
    <!--                <span>Your friend</span>-->
    <!--                <span>Unfriend</span>-->
    <!--            </button>-->
    <!--            <button class="btn btn-success" @click=""  :class="{ inactive: !no}">Send friend request</button>-->
    <!--        </td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        {{ f.name }}-->
    <!--    </tr>-->
    <!--</div>-->
    <div class="friend">
        <div class="content-box">
            <div class="col-sm-4">
                <div class="text-center">
                    <router-link :to="'/user/' + f.id">
                        <img :src="getUserPic(f.avatar)" class="img-circle" alt="profile" width="80px" @click="loadProfile(f.id)">
                    </router-link>
                </div>
            </div>
            <div class="col-sm-8">
                <h3><strong>{{ f.name }}</strong></h3>
                <button class="btn btn-primary a-btn" @click="" :class="{ inactive: no}">
                    <span></span>
                    <span>Your friend</span>
                    <span>Unfriend</span>
                </button>
                <button class="btn btn-success" @click=""  :class="{ inactive: !no}">Send friend request</button>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</template>

<script>
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

<style scoped>
    .col-sm-4 {
        padding: 0;
    }
    
    .content-box {
        padding-bottom: 10px;
    }
        
    h3 {
        padding-bottom: 5px;
    }
</style>