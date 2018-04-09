<?php

namespace App;

use Moloquent;

use App\models\User;
use App\GroupMessage;
use App\MongoMessage;

class MessageGroup extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'message_groups';
    
    protected $fillable = ['memeber'];
    
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    
    public function groupMessages()
    {
        return $this->hasMany(GroupMessage::class);
    }
    
    public function mongoMessages()
    {
        return $this->hasMany(MongoMessage::class);
    }
    
}
