<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Followed extends Model
{
    protected $fillable = ['from'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
