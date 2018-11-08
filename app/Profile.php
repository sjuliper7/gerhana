<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile_users";

    protected $fillable = [
        'full_name','date_of_birth','address','profile_image',
        'id_user'
    ];

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }


}
