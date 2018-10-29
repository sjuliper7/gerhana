<?php

namespace App\Http\Controllers;

use App\Product;
use App\StatusStore;
use App\Store;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = StatusStore::where('name','PANDING')->firstOrFail();

        $products = Product::all();
        $users = User::all();

        $storeRequest = Store::where(["id_status" => $status->id])->get();

        return view('adminlte::home', compact('users','products','storeRequest'));
    }
}
