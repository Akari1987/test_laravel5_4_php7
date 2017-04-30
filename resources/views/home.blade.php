@extends('layouts.app')

@section('sidebar')
    <sidenavbar></sidenavbar>
@endsection

@section('content')
 
        <router-view name="streamboxnavbar"></router-view>
    <router-view></router-view>
    
    
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
          
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dashboard</div>
            
                            <div class="panel-body">
                                You are logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection
