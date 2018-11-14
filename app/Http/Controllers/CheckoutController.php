<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    public function index(){
        $carts = Cart::where(['id_user' => Auth::user()->id, 'is_active' => true])->get();
        if(!Auth::guest() && count($carts) > 0){
            $total = 0;
            foreach ($carts as $cart){
                $total += $cart->sub_total_price;
            }
            return view('transaction.checkout-detail',compact('carts','total'));
        }else{
            return redirect('/login')->with('message','Anda Harus Login!');
        }
    }
}
