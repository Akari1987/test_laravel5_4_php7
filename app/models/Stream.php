<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    public function users ()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function messages ()
    {
        return $this->hasManyThrough('App\Message', 'App\User');   
    }
}
