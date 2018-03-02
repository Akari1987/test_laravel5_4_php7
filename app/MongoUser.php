<?php

namespace App;

use Moloquent;

use MongoMessage;

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
