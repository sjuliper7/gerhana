<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusStore extends Model
{
    protected $fillable = [
        'name',
    ];

    public function stores(){
        return $this->hasMany('App\Store','id_status');
    }
}
