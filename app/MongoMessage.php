<?php

namespace App;

use Moloquent;

use App\User;

class MongoMessage extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_messages';
    
    protected $fillable = ['group', 'body', 'sender', 'receiver'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
