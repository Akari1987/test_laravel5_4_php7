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

use App\Events\FriendRequested;

Route::get('/', function () {
    return view('welcome');
});

/*-------------
|  For Testing
--------------*/
Route::get('/redis', function()
{
    // $redis = app()->make('redis');
    $redis = Redis::connection();
    // $redis->set("key1", "testValue");
    // print_r(app()->make('redis'));
    // return $redis->get("key1");
});

// Route::get('/mongo', function()
// {
//     // $messages = DB::connection('mongodb')->collection('messages')->get()->toArray();
//     $messages = DB::connection('mongodb')->collection('messages')->get();
//     // return $messages[1];
//     var_dump($messages);
// });

Route::get('/test', function() {
    return view('test');
});

Route::get('/ch', function() {
    return App\FollowPagination::where('requester', Auth::user()->id)->get();
});

Route::get('/ch2', function() {
    return App\Test2::find(1)->users()->paginate(1);
});

Route::get('/ch3', function() {
    return Auth::user()->res_follows();
});

/*------------------------------------------
|  For MongoDB Testing : testMongo.blade.php
-------------------------------------------*/
Route::get('/testMongo/{menu?}', 'TestController@testMongo');

Route::get('/getTalks', 'TestController@mongoTalks');

Route::get('/getMessages', 'TestController@mongoMessages');

Route::get('/mongo', 'MessageController@index');

Route::get('/mongoInsert', 'TestController@mongoInsert');

Route::post('/cMongoMessage', 'TestController@cMongoMessage');

Route::get('/testtest', 'TestController@testUpdate');

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
    
    Route::get('user/{user_id?}', function() {
        return view('home');
    })->name('profile');    
/*----------------------
| For Vue Components API
------------------------*/
    // from Profile.vue
    Route::get('user/info/{id}', [
        'uses' => 'ProfileController@index'
    ]);
    
    Route::get('user/{user_id?}/{status?}', function() {
        return view('home');
    });
    
    Route::get('messagebox/{status_?}', function() {
        return view('home');
    });
    
    Route::get('/res_follows_array/{id}', 'FollowController@res_follows_array');
    
    Route::get('/res_friends_array/{id}', 'FriendshipsController@res_friends_array');
    
    // Route::get('/{userName?}', function() {
    //     return view('home');
    // })->where('userName', '[\/\w\.-]*');
    
    // Route::get('/profile/follow', function() {
    //     return view('home');
    // });
    
    // Route::get('/profile/activity', function() {
    //     return view('home');
    // });
    
    Route::get('/edit', function() {
        return view('home');
    });
    
    Route::get('/follow', function() {
        return view('home');
    });
    
    Route::get('/activity', function() {
        return view('home');
    });
    
    Route::get('/members', 'UserController@member');
    
/*-------------------
|  For User-Edit
---------------------*/
    Route::post('/postEdit', 'UserController@editAvatar');
    
/*-------------------------------
| For Vue Components ajax Request
--------------------------------*/
    Route::get('/messages', function() {
        return App\Message::all();
    });
    
/*-------------------------------
| For Social Functionality
--------------------------------*/
    // Follow system //
        Route::get('/userss', 'FollowController@index');
        Route::post('/follow/{user}', 'FollowController@follow');
        Route::post('/unfollow/{user}', 'FollowController@unfollow');
    
    /* Friendship system */
    // from Profile.vue
        Route::get('/check_relationship_status/{id}', [
            'uses' => 'FriendshipsController@check',
            'as' => 'check'
        ]);
        Route::get('/add_friend/{id}', [
            'uses' => 'FriendshipsController@add_friend',
            'as' => 'add_friend'
        ]);
        Route::get('/accept_friend/{id}', [
            'uses' => 'FriendshipsController@accept_friend',
            'as' => 'accept_friend'
        ]);
        
    // Announce Friendship request has been sent
        event(new FriendRequested());
    
    // Friendship Testing
        Route::get('/add', function() {
            return \App\User::find(1)->add_friend(3);
        });
        
        Route::get('/accept', function() {
            return \App\User::find(3)->accept_friend(1); 
        });
        
        Route::get('/friends', function() {
            return App\User::find(3)->friends();
        });
        
        Route::get('/pending_friends', function() {
            return App\User::find(4)->pending_friends_requests();
        });
        
        Route::get('/ids', function() {
            return App\User::find(1)->friends_ids();
        });
    
        Route::get('/is', function() {
            return App\User::find(1)->is_friends_with(2);
        });
    
/*-----------------------------------
| For Social Functionality from Vue
------------------------------------*/
    Route::get('/res_follows_array', 'FollowController@res_follows_array');
    // Route::get('/res_recommend', 'FollowController@res_recommend');
    
    Route::get('/res_follows', function(){
        return Auth::user()->res_follows();
    });
    
    Route::get('/res_recommend', function() {
        return Auth::user()->res_recommend();
    });
    
    // return recommend user to VUe component
        Route::get('/res_recommends/{id}', function($id) {
            return \App\user::find($id)->res_recommends();
        });
        
        Route::get('/res_follow_page', 'FollowController@res_followPage');
        
/*--------------------------------
|Private Message urls from Amitav
---------------------------------*/
    Route::post('get-private-message-notifications', 'PrivateMessageController@getUserNotifications');
    Route::post('get-private-messages', 'PrivateMessageController@getPrimateMessages');
    Route::post('get-private-message', 'PrivateMessageController@getPrivateMessageById');
    Route::post('get-private-messages-sent', 'PrivateMessageController@getPrivateMessageSent');
    Route::post('send-private-message', 'PrivateMessageController@sendPrivateMessage');
/*-------------------------------
| CRUD Application
--------------------------------*/
    //Route::resource('/posts', 'postController');
    
/*-------------------
|  For Image-Gallery
---------------------*/
    Route::get('image-gallery', 'ImageGalleryController@index');
    Route::post('image-gallery', 'ImageGalleryController@upload');
    Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');
    
    // Route::get('/{all}', function () {
    //     return view('home');
    // })->where(['all' => '.*']);
    
});

/*-------------------------------
| For Vue Components ajax Request
--------------------------------*/
    Route::get('/messages', function() {
        return App\Message::paginate(1);
    })->middleware('auth');