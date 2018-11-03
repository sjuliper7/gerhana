<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'content','id_user',
    ];   //

    public function customer(){
        return $this->belongsTo('App\User','id_user');
    }

}
