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
        'nickname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function microposts()
    {
        return $this->hasMany(Micropost::class);
    }
    
    public function feed_microposts()
    {
        $all_user_ids = $this-> pluck('users.id')-> toArray();
        $all_user_ids[] = $this->id;
        return Micropost::whereIn('user_id', $all_user_ids);
    }
    
     public function dates()
    {
        return $this->hasMany(Date::class);
    }
    
}