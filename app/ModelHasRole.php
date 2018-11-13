<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHasRole extends Model
{
    protected $fillable = [
        'role_id', 'model_type', 'model_id'
    ];

    public function user(){
        return $this->belongsTo('App\User','model_id');
    }
}
