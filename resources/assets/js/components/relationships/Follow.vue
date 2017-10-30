<template>
    <div class="follow">
        <tr>
            <router-link :to="'/user/' + f.id">
                <img :src="getUserPic(f.avatar)" class="img-circle" alt="profile" width="80px" @click="loadProfile(f.id)">
            </router-link>
            <td>
                <!--<form action="{{secure_url('unfollow/' . $user->id)}}" method="POST">-->
                    <!--<button type="submit" id="delete-follow-{{ $user->target_id }}" class="btn btn-danger">-->
                <button class="btn btn-primary a-btn" @click="reqUnfollow(f)" :class="{ inactive: no}">
                    <span></span>
                    <span>Following</span>
                    <span>Unfollow</span>
                </button>
                <!--<button class="btn btn-success" @click="reqFollow(f.id)"  :class="{ inactive: !no}">Follow</button>-->
                <button class="btn btn-success" @click="reqFollow(f)"  :class="{ inactive: !no}">Follow</button>
                <!--</form>-->
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
        methods: {
            ...mapActions({
                loadUser: 'loadUser'
            }),
            reqUnfollow(user) {
                axios.post('/unfollow/' + user.id);
                this.no = !this.no;
            },
            // reqFollow(id) {
            //     // axios.post('/follow/' + this.f.id);
            //     axios.post('/follow/' + id);
            //     this.no = !this.no;
            // },
            reqFollow(user) {
                axios.post('/follow/' + user.id);
                this.no = !this.no;
            },
        }
    }
</script>

<style scoped>
    .img-circle {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    td {
        padding-left: 5px;
        padding-right: 5px;
    }
</style>