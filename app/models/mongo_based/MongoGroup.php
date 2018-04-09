<?php

namespace App;

use Moloquent;

use App\MongoMessage;

class MongoGroup extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_groups';
    
    public function mongoMessages()
    {
        return $this->hasMany(MongoMessage::class);
    }
}
