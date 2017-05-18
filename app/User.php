<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /** 
     * Elowuent ORM relationships 
     */
    public function user_details()
    {
        return $this->hasOne(UserDetail::class);
    }
    
    /*-------------------------------
    | For Social Functionality
    --------------------------------*/
    public function follows() {
        return $this->hasMany(Follow::class);
    }
    
    public function isFollowing($target_id)
    {
        return (bool)$this->follows()->where('target_id', $target_id)->first(['id']);
    }
    
    /*-------------------------------
    | For Streambox
    --------------------------------*/
    public function messages() 
    {
        return $this->hasMany(Message::class);
    }
    
    public function streams()
    {
        return $this->belongsToMany(Stream::class);
    }
}
