<template>
    <vue-core-image-upload
      @imageuploaded = "imageuploaded"
      :max-file-size = "5242880"
      crop = "local"
      toCropImgY = "40px"
      :url = "url"
      :data = "token"
      inputOfFile = "image">
        <img :src="getPic(user.avatar)" width="160" class="img-circle circle-border m-b-md" alt="profile">
    </vue-core-image-upload>
</template>

<script>
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    import VueCoreImageUpload  from 'vue-core-image-upload';
    import {mapActions} from 'vuex';
    import axios from 'axios';
    
    export default {
        data() {
            return {
                token: {
                    _token: csrf_token
                },
                url: "https://test-laravel5-4-php7-akariozora.c9users.io/postEdit"
            }
        },
        components: {
            'vue-core-image-upload': VueCoreImageUpload
        },
        computed: {
            user() {
                return this.$store.state.user.user;
            }
        },
        methods: {
            ...mapActions({
                setUser: 'setUser'
            }),
            imageuploaded(res) {
                // if (res.errcode == 0) {
                //     this.src = 'http://img1.vued.vanthink.cn/vued751d13a9cb5376b89cb6719e86f591f3.png';
                // }
                axios.get('/user').then(response => {
                    console.log(response);
                    // this.user = response.data.name;
                    this.user.avatar = response.data.avatar;
                    const user = response.data;
                    this.setUser(user);
                });
            },
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
            }
        }
    }
</script>

<style scoped>
    .circle-border {
        border: 6px solid #b0e2e8;
    }
</style>