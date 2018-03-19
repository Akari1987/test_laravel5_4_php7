<?php

namespace App;

use Moloquent;

class Message extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'messages';
    
    protected $fillable = ['message', 'receiver_id', 'read'];
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
