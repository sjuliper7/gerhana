<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store_name', 'store_owner', 'store_email', 'store_phone',
        'store_address','store_ktp','store_ktp_image', 'store_npwp',
        'store_npwp_image','store_account_bank', 'store_account_type',
        'store_account_bank_image','id_status',
        'id_user'
    ];

    public function status(){
        return $this->belongsTo('App\StatusStore','id_status');
    }

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

}
