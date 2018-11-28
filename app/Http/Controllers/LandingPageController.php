<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use App\Store;
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


    public function searchByName($name){
        $store = Store::where(['store_name' => $name])->firstOrFail();
        $products = $store->products;

        return view('owner-product.index',compact('products','store'));
    }

    public function searchByCategory($category){
        $category_ = CategoryProduct::where(['name' => $category])->firstOrFail();
        $products = Product::where(['id_category'=> $category_->id])->get();

        return view('category-product',compact('products'));
    }
}
