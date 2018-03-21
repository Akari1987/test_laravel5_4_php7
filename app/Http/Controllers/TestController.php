<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\GroupMessage;
use App\MongoMessage;
use App\Message;

class TestController extends Controller
{
    public function testMongo()
    {
        return view('testMongo');
    }
    
    public function messages()
    {
        $messages = Message::get();
        $user_ids = $messages.user_id;
        
        return $messags;
        
    }
    
    public function mongoMessages()
    {
        $mongoMessages = MongoMessage::get();
        $mMessages = array();
        foreach($mongoMessages as $mongoMessage)
        {
            $user_id = $mongoMessage->user_id;
            $user = User::where('id', $user_id)->first();
            
            $user_data["avatar"] = $user->avatar;
            $user_data["name"] = $user->name;
            $mongoArray = $mongoMessage->toArray();
            $mongoArray += $user_data;
            
            array_push($mMessages, $mongoArray);
        }
        return $mMessages;
    }
    
    public function mongoInsert()
    {
        $array = array(
            "name" => "あらゆ" ,
	        "gender" => "男" ,
	        "blog" => array(
	    	    "name" => "SYNCER" ,
	    	    "published" => "2014-06-10" ,
	    	    "url" => "https://syncer.jp/" ,
	        ),
        );
        $json = json_encode($array);
        // return $json;
        $mongoInsert['body2'] = 123;
        $mongoInsert['body'] = 123;
        $mongoInsert['sender_id'] = -1;
        
        GroupMessage::create($mongoInsert);
    }
        
}
