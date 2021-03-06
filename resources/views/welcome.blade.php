<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <!--@component('components.jumbotron')-->
            <!--      @slot('title')-->
            <!--        Welcome DevMarketers!-->
            <!--      @endslot-->
        
            <!--      This is an awesome tutorial about all the new features that have arrived in Laravel 5.4. I recommend leaving a like if you enjoyed this video and a comment about what you want to learn next! Thanks so much for your support. Go DevMarketers!-->
        
            <!--      @slot('button')-->
            <!--        Click Like!-->
            <!--      @endslot-->
            <!--@endcomponent-->
            <!--<example></example>-->
            <!--<home-center></home-center>-->
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/user/1') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif
    
                <div class="content">
                    <h2>右上よりテストユーザーにてログイン、もしくは新規ユーザーを登録してください。</h2>
                    <div class="title m-b-md">
                        Laravel
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <router-link to="/profile/akari1987">Show Example</router-link>
                            <!--<router-link to="/example">Show Example</router-link> |-->
                            <!--<router-link to="/">Hide Example</router-link>-->
                            <router-view></router-view>
                        </div>
                    </div>
                    
                    <div class="links">
                        <a href="https://laravel.com/docs">Documentation</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </div>    
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
