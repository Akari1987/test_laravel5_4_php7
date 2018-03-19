<?php

namespace App;

use Moloquent;

use App\models\mongo_based\MongoMessage;

class MongoUser extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongoUsers';
    
    protected $fillable = ['body'];
    
    public function mongoMessages()
    {
        return $this->embedsMany('MongoMessage');
    }
}
