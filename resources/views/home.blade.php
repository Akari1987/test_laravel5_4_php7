@extends('layouts.app')

@section('sidebar')
    <div class="atLarge">
        <large-sidenavbar></large-sidenavbar>
    </div>
@endsection

@section('content')
    <!--<div class="absolute">-->
    <!--    <nav>-->
    <!--        <ul id="cd-navigation">-->
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
    <!--        </ul>-->
    <!--    </nav>-->
    <!--</div>-->
<!--<template>-->
<!--    <v-parallax src="/static/doc-images/vbanner.jpg">-->
<!--    <v-layout column align-center justify-center>-->
<!--      <h1 class="white--text">Vuetify.js</h1>-->
<!--      <h4 class="white--text">Build your application today!</h4>-->
<!--    </v-layout>-->
<!--  </v-parallax>-->
<!--</template>-->
    <!--<home-center></home-center>-->
    <page-body></page-body>
    <!--<router-view></router-view>-->
@endsection
