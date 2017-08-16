@extends('layouts.app')

@section('sidebar')
    <div class="atLarge">
        <large-sidenavbar></large-sidenavbar>
    </div>
@endsection

@section('content')
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
