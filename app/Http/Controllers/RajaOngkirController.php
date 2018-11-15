<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Steevenz\Rajaongkir;


class RajaOngkirController extends Controller
{
    private $rajaongkir;

    public function __construct()
    {
        $config['api_key'] = env("RAJAONGKIR_KEY");
        $config['account_type'] = 'pro';

        $this->rajaongkir = new Rajaongkir($config);
    }


    public function getProvinces(){
        $provinces = $this->rajaongkir->getProvinces();
        return $provinces;
    }

    public function getCities(Request $request){
        $cities = $this->rajaongkir->getCities($request["province_id"]);
        return $cities;
    }

    public function getSubdistricts(Request $request){
        $subDistrict = $this->rajaongkir->getSubdistricts($request["city_id"]);
        return $subDistrict;
    }

    public function estimateCost(Request $request){
        $costs = $this->rajaongkir->getCost(['city' => $request["origin_id"]],
            ['subdistrict' => $request["subdistrict_id"]],
            1000, 'jne');

        return $costs["costs"][1]["cost"][0];
    }
}
