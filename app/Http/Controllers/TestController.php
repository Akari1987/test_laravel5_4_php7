<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\BSON\ObjectId;

use App\User;
use App\GroupMessage;
use App\MessageGroup;
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
    
    public function mongoTalks()
    {
        $id = Auth::id();
    /* return MessageGroups contains auth user */
        $groups = MessageGroup::whereIn('user_id', [$id])->get();
    /* return name and avatar of User joining the groups, and latest message */
        $user_datas = [];
        $merged_ids = [];
        foreach($groups as $group)
        {
            $user_ids = $group->user_id;
            $merged_ids = array_merge($merged_ids, $user_ids);
        }
        $unique_ids = array_unique($merged_ids);
        $ids_value = array_values($unique_ids);
        foreach($ids_value as $id_value)
            {
                $user = User::where('id', $id_value)->first();
                $user = array('name' => $user->name, 'avatar' => $user->avatar);
                array_push($user_datas, $user);
            }
        return $user_datas;
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
    /* Receive POST request */
    public function cMongoMessage (Request $request)
    {
        return $request;
        $user = Auth::user();
        $request = $request->toArray();
        $user->mongoMessages()->create($request);
    }
    
    // public function testUpdate ()
    // {
    //     $messageGroup = MessageGroup::first();
    //     $messageGroup->update(
    //         ['oid' => $messageGroup->_id],
    //         ['$set' => ['user_id' => [1,2,3]]]
    //     );
    // }
    
    public function testUpdate ()
    {
        $mongoMessage = MongoMessage::first();
        $mongoMessage->update(
            ['body' => "Seeded sample"],
            ['$set' => ['body' => "Update succeeded"]]
        );
    }
}
