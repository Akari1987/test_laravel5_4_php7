<!DOCTYPE html>
<html>
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Styles -->
        <!--<link href="{{ secure_asset('css/inspinia/plugins/summernote/summernote.css') }}" rel="stylesheet">-->
        <!--<link href="{{ secure_asset('css/inspinia/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">-->
        <!--<link href="{{ secure_asset('css/inspinia/plugins/iCheck/custom.css') }}" rel="stylesheet">-->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <!--<link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">-->
        <!--<link href="{{ secure_asset('css/inspinia/animate.css') }}" rel="stylesheet">-->
    
    
        <!--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">-->
    
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="wrapper" class="nonedit">
            <div id="app">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
        
                            <!-- Collapsed Hamburger -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
        
                            <!-- Branding Image -->
                            <!--<a class="navbar-brand" href="{{ url('/') }}">-->
                            <!--    {{ config('app.name', 'Laravel') }}-->
                            <!--</a>-->
                        </div>
        
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
        
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
    </body>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>

<style type="text/css">
    #wrapper {
        position: relative;
        margin-top: auto;
        margin-bottom: auto;
    }
</style>
