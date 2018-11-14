<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'stock', 'description','story','images',
        'weight','id_status','id_category','id_store'
    ];

    public function status(){
        return $this->belongsTo('App\StatusProduct','id_status');
    }

    public function category(){
        return $this->belongsTo('App\CategoryProduct','id_category');
    }

    public function store(){
        return $this->belongsTo('App\Store','id_store');
    }

    public function cart(){
        return $this->hasOne('App\Cart','id_product');
    }
}
