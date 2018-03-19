<?php

namespace App;

use Moloquent;

use App\User;
use App\MessageGroup;

class MongoMessage extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_messages';
    
    protected $fillable = ['user_id', 'group', 'body', 'receiver'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function messageGroup()
    {
        return $this->belongsTo(MessageGroup::class);
    }
    
}
