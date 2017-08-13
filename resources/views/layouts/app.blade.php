<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Styles -->
        <link href="{{ secure_asset('css/inspinia/plugins/summernote/summernote.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/inspinia/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/inspinia/plugins/iCheck/custom.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/inspinia/animate.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/perfect-scrollbar.css') }}" rel="stylesheet">
        <!--<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet" type="text/css">-->
    
    
        <!--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">-->
    
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        <!-- Scripts -->
        <script>
        if(window.matchMedia('(min-width: 1024px)').matches)
                {
                    console.log('true');
                } else
                {
                    console.log('false');
                }
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <!--@@@vue-infinte-loading-error-point-->
        <!--<div id="wrapper" class="nonedit">-->
            <div id="editingOverlay"></div>
            <div id="app">
                @yield('sidebar')
                <div id="page-wrapper" class="gray-bg">
                    <!--<header class="cd-auto-hide-header">-->
                    <!--	<nav class="cd-primary-nav">-->
                    <!--		<a href="#cd-navigation" class="nav-trigger">-->
                    <!--			<span>-->
                    <!--				<em aria-hidden="true"></em>-->
                    <!--				Menu-->
                    <!--			</span>-->
                    <!--		</a> <!-- .nav-trigger -->
                     
                    <!--		<ul id="cd-navigation">-->
                    <!--			<li><a href="#0">The team</a></li>-->
                    <!--			<li><a href="#0">Our Services</a></li>-->
                    <!--			<li><a href="#0">Our Projects</a></li>-->
                    <!--            <li class="dropdown">-->
                    <!--                @if (Auth::guest())-->
                    <!--                    <li><a href="{{ route('login') }}">Login</a></li>-->
                    <!--                    <li><a href="{{ route('register') }}">Register</a></li>-->
                    <!--                @else-->
                    <!--                    <li class="dropdown" id="auth_user">-->
                    <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">-->
                    <!--                            {{ Auth::user()->name }} <span class="caret"></span>-->
                    <!--                        </a>-->
            
                    <!--                        <ul class="dropdown-menu" role="menu">-->
                    <!--                            <li>-->
                    <!--                                <a href="{{ route('logout') }}"-->
                    <!--                                    onclick="event.preventDefault();-->
                    <!--                                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>-->
                    <!--                                    Logout-->
                    <!--                                </a>-->
            
                    <!--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
                    <!--                                    {{ csrf_field() }}-->
                    <!--                                </form>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!--                @endif-->
                    <!--            </li>-->
                    <!--		</ul>-->
                    <!--	</nav> <!-- .cd-primary-nav -->
                    <!--	<nav class="cd-secondary-nav navbar navbar-static-top navbar-fixed" role="navigation">-->
                    <!--        <div class="navbar-header">-->
                    <!--            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">-->
                    <!--                <div class="form-group">-->
                    <!--                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">-->
                    <!--                </div>-->
                    <!--            </form>-->
                    <!--        </div>-->
                    <!--        <ul class="nav navbar-top-links navbar-right">-->
                    <!--            <li>-->
                    <!--                <span class="m-r-sm text-muted welcome-message">Inplemented by Laravel Blade template</span>-->
                    <!--            </li>-->
                    <!--            <li class="dropdown" id="mail">-->
                    <!--                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">-->
                    <!--                    <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>-->
                    <!--                </a>-->
                    <!--                <ul class="dropdown-menu dropdown-messages">-->
                    <!--                    <li>-->
                    <!--                        <div class="dropdown-messages-box">-->
                    <!--                            <a href="profile.html" class="pull-left">-->
                    <!--                                <img alt="image" class="img-circle" src="">-->
                    <!--                            </a>-->
                    <!--                            <div class="media-body">-->
                    <!--                                <small class="pull-right">46h ago</small>-->
                    <!--                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>-->
                    <!--                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <!--                    <li>-->
                    <!--                        <div class="dropdown-messages-box">-->
                    <!--                            <a href="profile.html" class="pull-left">-->
                    <!--                                <img alt="image" class="img-circle" src="">-->
                    <!--                            </a>-->
                    <!--                            <div class="media-body ">-->
                    <!--                                <small class="pull-right text-navy">5h ago</small>-->
                    <!--                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>-->
                    <!--                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <!--                    <li>-->
                    <!--                        <div class="dropdown-messages-box">-->
                    <!--                            <a href="profile.html" class="pull-left">-->
                    <!--                                <img alt="image" class="img-circle" src="">-->
                    <!--                            </a>-->
                    <!--                            <div class="media-body ">-->
                    <!--                                <small class="pull-right">23h ago</small>-->
                    <!--                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>-->
                    <!--                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <!--                    <li>-->
                    <!--                        <div class="text-center link-block">-->
                    <!--                            <a href="mailbox.html">-->
                    <!--                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                </ul>-->
                    <!--            </li>-->
                    <!--            <li class="dropdown" id="notification">-->
                    <!--                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">-->
                    <!--                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>-->
                    <!--                </a>-->
                    <!--                <ul class="dropdown-menu dropdown-alerts">-->
                    <!--                    <li>-->
                    <!--                        <a href="mailbox.html">-->
                    <!--                            <div>-->
                    <!--                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages-->
                    <!--                                <span class="pull-right text-muted small">4 minutes ago</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <!--                    <li>-->
                    <!--                        <a href="profile.html">-->
                    <!--                            <div>-->
                    <!--                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers-->
                    <!--                                <span class="pull-right text-muted small">12 minutes ago</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <!--                    <li>-->
                    <!--                        <a href="grid_options.html">-->
                    <!--                            <div>-->
                    <!--                                <i class="fa fa-upload fa-fw"></i> Server Rebooted-->
                    <!--                                <span class="pull-right text-muted small">4 minutes ago</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <!--                    <li>-->
                    <!--                        <div class="text-center link-block">-->
                    <!--                            <a href="notifications.html">-->
                    <!--                                <strong>See All Alerts</strong>-->
                    <!--                                <i class="fa fa-angle-right"></i>-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <!--                </ul>-->
                    <!--            </li>-->
                                
                                
                    <!--        </ul>-->
                    <!--    </nav>  <!-- .cd-secondary-nav navbar -->
                    <!--</header> <!-- .cd-auto-hide-header -->
                    <topnavbar></topnavbar>
                    <main class="cd-main-content">
                        @yield('content')
                    </main>
                </div>
            </div>
        <!-- Main Scripts -->
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script
          src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
          integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
          crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/app.js') }}"></script>
        <script src="{{ secure_asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ secure_asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!--<script src="{{ secure_asset('js/plugins/summernote/forsummernotetoolbar.js') }}"></script>-->
        <script src="{{ secure_asset('js/inspinia.js') }}"></script>
        <script src="{{ secure_asset('js/plugins/pace/pace.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ secure_asset('js/plugins/iCheck/icheck.min.js') }}"></script>
        <!--<script src="{{ secure_asset('js/plugins/summernote2/summernote.js') }}"></script>-->
    </body>
</html>
