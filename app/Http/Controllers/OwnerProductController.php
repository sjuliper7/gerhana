<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerProductController extends Controller
{
    public function index(){
        return view('products.index');
    }
}
