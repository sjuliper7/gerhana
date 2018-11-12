<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request){
        if(!Auth::guest()){
            $carts = Cart::where(['id_user' => Auth::user()->id, 'is_active' => true])->get();
            $total = 0;

            foreach ($carts as $cart){
                $total += $cart->sub_total_price;
            }

            return view('cart',compact('carts', 'total'));
        }else{
            return redirect('/login');
        }
    }

    public function addToCart(Request $request){
        if(!Auth::guest()){
            $getCart = Cart::where(['id_product' => $request['id_product'] , 'id_user' => Auth::user()->id, 'is_active' => true])->get();
            $product = Product::find($request['id_product']);

            if(count($getCart) == 0){
                $cart  = new Cart();
                $cart->id_product = $request['id_product'];
                $cart->id_user = Auth::user()->id;
                $cart->quantity = $request['quantity'];
                $cart->sub_total_price = $request['quantity'] * $product->price;
                $cart->is_active = true;
                $cart->save();
            }else{
                $getCart[0]->quantity =  $getCart->quantity + 1;
                $getCart[0]->sub_total_price =  $getCart->sub_total_price + ($product->price);
                $getCart[0]->save();
            }

        }else{
            dd("guest");
        }

        return redirect('/carts');
    }

    function toUpdateQuantity(Request $request){
        if($request['type'] === "up"){
            $cart = Cart::find($request['cart_id']);
            $cart->quantity = $cart->quantity+1;
            $cart->sub_total_price = ($cart->sub_total_price) + ($cart->product->price);
            $cart->update();
        }else{
            $cart = Cart::find($request['cart_id']);
            $cart->quantity = $cart->quantity+1;
            $cart->sub_total_price = ($cart->sub_total_price) + ($cart->product->price);
            $cart->update();
        }
        return "success";
    }
}
