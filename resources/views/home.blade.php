@extends('layouts.app')

@section('sidebar')
    <sidenavbar></sidenavbar>
@endsection

@section('content')
    <router-view name="streamboxnavbar"></router-view>
    <router-view></router-view>
@endsection
