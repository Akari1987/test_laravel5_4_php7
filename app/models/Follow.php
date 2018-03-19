<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = ['target_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getTargetIdAttribute($value) 
    {
        return $value;
    }
     
    public function resFollowing() {
        
    }
}
