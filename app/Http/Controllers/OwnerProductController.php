<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\StatusProduct;
use Illuminate\Http\Request;

class OwnerProductController extends Controller
{
    public function index(){
        return view('owner-product.index');
    }

    public function create(){
        $statusProducts = StatusProduct::all();
        $categoryProducts = CategoryProduct::all();
        return view('owner-product.create',compact('statusProducts','categoryProducts'));
    }
}
