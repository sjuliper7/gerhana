<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Steevenz\Rajaongkir;


class RajaOngkirController extends Controller
{
    private $key = "5c7f26bc5e3613a723b4240d192aff90";
    private $rajaongkir;

    public function __construct()
    {
        $config['api_key'] = $this->key;
        $config['account_type'] = 'starter';

        $this->rajaongkir = new Rajaongkir($config);
    }


    public function getProvince(){
        $provinces = $this->rajaongkir->getProvinces();
        dd($provinces);
        return $provinces;
    }

    public function getCity(){
        $cities = $this->rajaongkir->getCities();
        return $cities;
    }

    public function estimateCost(){
        $cities = $this->rajaongkir->getCities();
        dd($cities);
//        $cost = $this->rajaongkir->getCost(['city' => 1], ['country' => 11], 50, 'jne');
//        dd($cost);
    }
}
