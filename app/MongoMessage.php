<?php

namespace App;

use Moloquent;

class MongoMessage extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'mongo_messages';
    
    protected $fillable = ['group', 'body', 'sender', 'receiver'];
}
