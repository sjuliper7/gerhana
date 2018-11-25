<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $categoryProducts = CategoryProduct::all();
        $products = Product::all();
        return view('landing-page',compact('categoryProducts', 'products'));
    }

    public function buyProduct($name){
        $product = Product::where(['name' => $name])->firstOrFail();
        $images = json_decode($product->images);
        $reviews = $product->reviews()->paginate(30);
//        dd(count($reviews));
        return view('detail-product',compact('product','images','reviews'));
    }
}
