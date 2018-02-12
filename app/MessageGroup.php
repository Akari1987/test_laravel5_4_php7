<?php

namespace App;
use Moloquent;

class MessageGroup extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'message_groups';
    
    protected $fillable = ['body', 'sender_id'];
    
}
