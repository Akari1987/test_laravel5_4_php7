<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowPagination extends Model
{
    protected $fillable = ['requester'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
