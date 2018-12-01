<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index(){
        $categoryProducts = CategoryProduct::all();
        $products = Product::all();
        $productsView = Product::where('viewed', '!=' , 0)->get();

        $mostProductView = array();

        for($i = 0; $i<count($productsView) ; $i++){
            for ($j = 0; $j < count($productsView) - $i -1 ;$j++ ){
                if($productsView[$i]->viewed < $productsView[$j+1]->viewed){
                    $temp = $productsView[$j];
                    $productsView[$j] = $productsView[$j+1];
                    $productsView[$j+1] = $temp;
                }
            }
        }

        $max = 6;

        if(count($productsView ) < 6){
            $max = count($productsView);
        }

        for($i=0; $i<$max;$i++){
            array_push($mostProductView, $productsView[$i]);
        }

        return view('landing-page',compact('categoryProducts', 'products','mostProductView'));
    }

    public function buyProduct($name){
        $product = Product::where(['name' => $name])->firstOrFail();
        $product->viewed = $product->viewed + 1;
        $images = json_decode($product->images);
        $reviews = $product->reviews()->paginate(30);
        $product->save();
//        dd(count($reviews));
        return view('detail-product',compact('product','images','reviews'));
    }


    public function searchByName($name){
        $store = Store::where(['store_name' => $name])->firstOrFail();
        $products = $store->products;

        return view('owner-product.index',compact('products','store'));
    }

    public function searchByCategory($category){
        $categoryProducts = CategoryProduct::all();

        $category_ = CategoryProduct::where(['name' => $category])->firstOrFail();
        $products = Product::where(['id_category'=> $category_->id])->get();

        return view('category-product',compact('products','category','categoryProducts'));
    }

    public function getUser(){
        return Auth::user()->id;
    }
}
