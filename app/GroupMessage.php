<?php

namespace App;

use Moloquent;

class GroupMessage extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'group_messages';
    protected $fillable = ['body', 'sender_id'];
}
