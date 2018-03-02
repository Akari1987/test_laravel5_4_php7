<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Jenssegers\Mongodb\Eloquent\HybridRelations;

use App\Traits\Friendable;
use App\Traits\Followable;
use App\Traits\Recommendation;
use App\Follow;
use App\Test2;
use App\MongoMessage;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    use HybridRelations;
    
    use Friendable;
    use Followable;
    use Recommendation;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_st', 'name', 'auth_name', 'email', 'password', 'provider', 'provider_id', 'avatar',
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
    
    public function follows()
    {
        return $this->hasMany(Follow::class);
    }
    
    // public function followPaginations()
    // {
    //     return $this->hasMany(FollowPagination::class);
    // }
    
    public function followeds()
    {
        return $this->belongsToMany(Followed::class);
    }
    
    public function test2s()
    {
        return $this->belongsToMany(Test2::class);    
    }
    
    public function mongoMessages()
    {
        return $this->hasMany(MongoMessage::class);
    }
    
    /*-------------------------------
    | For Social Functionality
    --------------------------------*/
    public function getNameAttribute($value) 
    {
        return $value;
    }
    
    public function setNameAttribute($value) 
    {
        $this->attributes['name'] = strtoupper($value);
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
