<template>
    <div class="follow">
        <tr>
            <td clphpass="table-text">
                <img :src="getPic(f.avatar)" class="img-circle" alt="profile" width="80px" >
            </td>
            <!--<td clphpass="table-text">-->
            <!--    {{ f.name }}-->
            <!--</td>-->
            <!--<td @hover="isHovering = !isFollowing">-->
            <td>
                <!--<form action="{{secure_url('unfollow/' . $user->id)}}" method="POST">-->
                    <!--<button type="submit" id="delete-follow-{{ $user->target_id }}" class="btn btn-danger">-->
                <button class="btn btn-primary a-btn" @click="reqUnfollow" :class="{ inactive: no}">
                    <span></span>
                    <span>Following</span>
                    <span>Unfollow</span>
                </button>
                <button class="btn btn-success" @click="reqFollow"  :class="{ inactive: !no}">Follow</button>
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
    
    export default {
        props: ['f'],
        data() {
            return {
                no: false,
                isFollowing: true,
                isHovering: false
            }
        },
        methods: {
            getPic(path) {
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
            },
            reqUnfollow() {
                var id = this.f.id;
                axios.delete('/unfollow/' + this.f.id);
                this.no = !this.no;
            },
            reqFollow() {
                axios.post('/follow/' + this.f.id);
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
    
    /*------------------ 
    | For Follow Button
    -------------------*/
        .inactive {
            display: none;
        }
        
        .a-btn:hover {
            background-color: #ed5565;
            border-color: #ed5565;
        }
        
        .a-btn {
            /*display: block;*/
            float: left;
            position: relative;
            transition: all 0.3s linear;
        }
        
        .a-btn span {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            transition: all 0.3s linear;
        }
        
        .a-btn span:nth-child(1), 
        .a-btn span:nth-child(3){
            position: absolute;
            top: 6px;
            left: 12px;
            line-height: 22.4px;
            opacity: 0;
        }
        
        .a-btn span:nth-child(1){
            opacity: 0.2;
        }
        
        .a-btn:hover span:nth-child(3){
            opacity: 1; 
        }
        .a-btn:hover span:nth-child(2){
            opacity: 0; 
        }
        .a-btn:hover span:nth-child(1){
            animation: rotate 1s linear; 
        }
</style>