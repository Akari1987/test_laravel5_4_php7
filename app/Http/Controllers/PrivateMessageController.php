<?php

namespace App\Http\Controllers;

use App\PrivateMessage;
use Illuminate\Http\Request;
use Redis;
use App\Http\Requests;

class PrivateMessageController extends Controller
{
    protected $redis;
    
    function _construct()
    {
        $this->redis = Redis::connection();
    }
    
    public function getUserNotifications(Request $request)
    {
        
    }
    
    public function getPrivateMessages(Request $request)
    {
        
    }
    
    public function getPrivateMessageById(Request $request)
    {
        
    }
    
    public function getPrivateMessageSentMessage(Request $request)
    {
        
    }
    
    public function sendPrivateMessage(Request $request)
    {
        $attributes = [
            'sender_id' => $request->user()->id,
            'stream_id' => $request->input('stream_id'),
            'message' => $request->input('message'),
            'read' => 0,
        ];
        
        $pm = PrivateMessage::create($attributes);
    }
}
