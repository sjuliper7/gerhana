<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'total_price', 'shipment_fee', 'shipment_etd', 'address',
        'prove-payment','id_user','id_status'
    ];

    public function detailTransactions(){
        return $this->belongsTo('App\DetailTransaction','id_transaction');
    }
}
