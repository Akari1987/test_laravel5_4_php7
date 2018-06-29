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
    
    public function mongoGroupChats()  // **return auth user's joining groups, user data and latest group messages**
    {
        $id = Auth::id();
    /* return MessageGroups contains auth user */
        $groups = MessageGroup::whereIn('user_id', [$id])->get();
        
    /* return name and avatar of User joining the groups, and latest message */
        $mongoGroups = [];
        $user_datas = [];
        $groups_datas = [];
        $merged_ids = [];
        foreach($groups as $group)
        {
            $user_ids = $group->user_id;
            $merged_ids = array_merge($merged_ids, $user_ids);
            $withLatest = array('group' => $group, 'latestMessage' => $group->mongoMessages()->latest()->first()); // if not return null.
            if($withLatest["latestMessage"])
            {
                array_push($groups_datas, $withLatest);
            }
        }
        $unique_ids = array_unique($merged_ids);
        $ids_value = array_values($unique_ids);
        foreach($ids_value as $id_value)
            {
                $user = User::where('id', $id_value)->first();
                $user = array('id' => $user->id, 'name' => $user->name, 'avatar' => $user->avatar);
                array_push($user_datas, $user);
            }
        $result['users'] = $user_datas;
        $result['groups'] = $groups_datas;
        return $result;
    }
    
    public function getGroupStreamMessages(Request $request)  // **return clicked all group messages**
    {
        $group = MessageGroup::where('_id', $request->id)->first();
        return $group->mongoMessages()->get();
    }
    
    public function mongoMessages()  // **return All mongoMessages**
    {
        // $user_data = [];
        $mongoMessages = MongoMessage::get();
        $mMessages = [];
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
    public function createGroupMongoMessage (Request $request)
    {
        // return $request->body;
        $user = Auth::user();
        $group = MessageGroup::where('_id', $request->groupId)->first();
        $message = MongoMessage::create(["body" => $request->body]);
        $message = $user->mongoMessages()->save($message);
        $message = $group->mongoMessages()->save($message);
        return 1;
        // $request = $request->toArray();
        // $user->mongoMessages()->create($request);
        // $groupId = $request.groupId;
        // return $groupId;
    }
    
    public function cMongoMessage (Request $request)
    {
        // return $request;
        $user = Auth::user();
        $request = $request->toArray();
        // $user->mongoMessages()->create($request);
    }
    
    public function deleteStreamMessage (Request $request)
    {
        // return $request;
        $message = MongoMessage::where('_id', $request->messageId)->first();
        $message->delete();
        return 1;
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
