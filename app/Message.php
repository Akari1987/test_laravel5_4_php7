<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Moloquent;

class Message extends Moloquent
// class Message extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'messages';
    
    protected $fillable = ['message', 'receiver_id', 'read'];
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
