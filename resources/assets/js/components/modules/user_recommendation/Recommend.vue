<template>
    <div id="recommned">
        <tr>
            <td clphpass="table-text">
                <img :src='getPic(r.avatar)' class="img-circle" alt="profile" width="45px" >
            </td>
            <td clphpass="table-text">
                {{ r.name }}
            </td>
            <td>
                <div>
                    <button class="btn btn-success" @click="reqFollow"  :class="{ inactive: no}">Follow</button>
                    <button class="btn btn-primary a-btn" @click="reqUnfollow" :class="{ inactive: !no }">
                        <span></span>
                        <span>Following</span>
                        <span>Unfollow</span>
                    </button>
                </div>
            </td>
        </tr>
    </div>
</template>

<script>
    import axios from 'axios';
    
    export default {
        props: ['r'],
        data() {
            return {
                yes: true,
                no: false,
                isFollowing: false
            }
        },
        methods: {
            getPic(path) {
                return '/' + path;
            },
            reqFollow() {
                axios.post('/follow/' + this.r.id);
                this.no = this.yes;
            },
            reqUnfollow() {
                axios.delete('/unfollow/' + this.r.id);
                this.no = !this.no;
            }
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
    
    .inactive {
        display: none;
    }
    
     /*------------------ 
    | For Follow Button
    -------------------*/
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
    