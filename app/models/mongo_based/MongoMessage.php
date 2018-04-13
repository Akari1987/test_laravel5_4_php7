<?php

namespace App;

use Moloquent;

use App\User;
use App\MessageGroup;
use App\MongoGroup;

class MongoMessage extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_messages';
    
    protected $fillable = ['user_id', 'group', 'body'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function messageGroup()
    {
        return $this->belongsTo(MessageGroup::class);
    }
    
    public function mongoGroup()
    {
        return $this->belongsTo(MongoGroup::class);
    }
    
}
