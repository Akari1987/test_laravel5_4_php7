<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GroupMessage;

class TestController extends Controller
{
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
