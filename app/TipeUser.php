<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeUser extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users(){
        return $this->hasMany('App\User','id_tipeUser');
    }

}
