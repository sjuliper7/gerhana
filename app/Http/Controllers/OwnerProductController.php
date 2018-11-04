<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\StatusProduct;
use App\Store;
use Illuminate\Http\Request;

class OwnerProductController extends Controller
{
    public function index($name){
        $store = Store::where(['store_name' => $name])->firstOrFail();
        $products = $store->products;

        return view('owner-product.index',compact('products'));
    }

    public function create(){
        $statusProducts = StatusProduct::all();
        $categoryProducts = CategoryProduct::all();
        return view('owner-product.create',compact('statusProducts','categoryProducts'));
    }

    public function store(Request $request){

        foreach ($request->parameters as $image){
            echo $image;
            echo '<br>';
        }

        dd(count($request->parameters));
    }
}
