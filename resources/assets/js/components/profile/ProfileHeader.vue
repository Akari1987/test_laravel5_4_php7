<template>
    <div class="profileHeader">
        <div class="row m-b-lg m-t-lg">
            <div class="col-md-6">
                <!--<h3 color="green">  プロフィール画像のeditができます</h3>-->
                <div class="profile-image editable">
                    <div class="edit" :class="{ inactive: !no }">
                        <app-edit></app-edit>
                    </div>
                    <img :src="getUserPic(loadedUser.avatar)" class="img-circle circle-border m-b-md" alt="profile" :class="{ inactive: no }">
                </div>
                <div class="profile-info">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                {{ loadedUser.name }}
                            </h2>
                            <div v-if="isMe">
                                <a class="editMode" @click="no = yes"  :class="{ inactive: no}"><li class="fa fa-wrench">edit</li></a>
                                <a class="removeEdit" @click="no = !no" :class="{ inactive: !no }"><li class="fa fa-wrench">save</li></a>
                            </div>
                            <h4>Lorem ipsum</h4>
                            <small>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table small m-b-xs">
                    <tbody>
                    <tr>
                        <td>
                            <strong>142</strong> Projects
                        </td>
                        <td>
                            <strong>22</strong> Followers
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>61</strong> Comments
                        </td>
                        <td>
                            <strong>54</strong> Articles
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>154</strong> Tags
                        </td>
                        <td>
                            <strong>32</strong> Friends
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <small>Lorem ipsum</small>
                <h2 class="no-margins">206 480</h2>
                <div id="sparkline1"></div>
            </div>
        </div>
    </div>
</template>

<script>
    import { getUserPicMixin } from '../../mixins/getUserPicMixin';
    import { isMeMixin } from '../../mixins/isMeMixin';
    
    import Edit from './Edit.vue';
    
    export default {
        mixins: [getUserPicMixin, isMeMixin],
        components: {
            'app-edit': Edit    
        },
        data() {
            return {
                yes: true,
                no: false,
            }
        },
        methods: {
            editMode() {
            },
        }
    }
</script>

<style scoped>
    .inactive {
        display: none;
    }
</style>