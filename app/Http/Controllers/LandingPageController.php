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
}
