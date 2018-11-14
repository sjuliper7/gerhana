<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function store()
    {
        return $this->hasOne('App\Store','id_user');
    }

    public function requestStore()
    {
        return $this->hasMany('App\RequestStore','id_user');
    }


    public function userType()
    {
        return $this->hasOne('App\UserType','id_user');
    }

    public function userProfile()
    {
        return $this->hasOne('App\UserProfile','id_user');
    }

    public function userStatus()
    {
        return $this->hasOne('App\UserStatus','id_user');
    }





}
