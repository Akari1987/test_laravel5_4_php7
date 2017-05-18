<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('welcome'); 
});

/*-------------------
|  For Socialite
---------------------*/
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['auth']], function() {
    /*----------------------
    | For Vue Components REST
    ------------------------*/
    
    Route::get('/user', function(){
        return Auth::user(); 
    });
    
    Route::get('/profile', function() {
        return view('home');
    });
    
    Route::get('/follow', function() {
        return view('home');
    });
    
    Route::get('/activity', function() {
        return view('home');
    });
    
    Route::get('/stream', function(){
        return view('home');
    });
    
    Route::get('/members', 'UserController@member');
    
    Route::get('/email', function(){
        return view('home');
    });
    
    /*-------------------------------
    | For Vue Components ajax Request
    --------------------------------*/
    Route::get('/messages', function() {
        return App\Message::all();
    });
    
    /*-------------------------------
    | For Social Functionality
    --------------------------------*/
    Route::get('/users', 'FollowController@index');
    Route::post('/follow/{user}', 'FollowController@follow');
    Route::delete('/unfollow/{user}', 'FollowController@unfollow');
});
// Route::get('/user', function(){
//     return Auth::user(); 
// })->middleware('auth'); 

// Route::get('/stream', function(){
//     return view('home');
// })->middleware('auth'); 

// Route::get('/member', function(){
//     return view('home');
// })->middleware('auth'); 

// Route::get('/email', function(){
//     return view('home');
// })->middleware('auth'); 

/*-------------------------------
| For Vue Components ajax Request
--------------------------------*/
// Route::get('/messages', function() {
//     return App\Message::all();
// })->middleware('auth');