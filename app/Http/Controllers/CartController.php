<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

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
            $total = 0;
            $carts = Session::get('carts');
            if($carts !== null){
                foreach ($carts as $cart){
                    $total += $cart->sub_total_price;
                }
            }else{
                $carts = array();
            }

            return view('cart',compact('carts', 'total'));
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
                $getCart[0]->quantity =  $getCart[0]->quantity + $request['quantity'];
                $getCart[0]->sub_total_price =  $getCart[0]->sub_total_price + ($product->price * $request['quantity']);
                $getCart[0]->save();
            }

        }else{
            $carts = Session::get('carts');
            $product = Product::find($request['id_product']);

            if($carts == null){
                $cart  = new Cart();
                $cart->id_product = $request['id_product'];
                $cart->id_user = 0;
                $cart->quantity = $request['quantity'];
                $cart->sub_total_price = $request['quantity'] * $product->price;
                $cart->is_active = true;
                array_push($carts, $cart);
                Session::put('carts',$carts);

            }else{
                $check = false;
                $carts = Session::get('carts');
                foreach ($carts as $cart){
                    if($cart->id_product == $request['id_product']){
                        $check = true;
                        $cart->quantity = $cart->quantity + $request['quantity'];
                        $cart->sub_total_price = $cart->sub_total_price + ($product->price * $request['quantity']);
                    }
                }

                if(!$check){
                    $cart  = new Cart();
                    $cart->id_product = $request['id_product'];
                    $cart->id_user = 0;
                    $cart->quantity = $request['quantity'];
                    $cart->sub_total_price = $request['quantity'] * $product->price;
                    $cart->is_active = true;
                    array_push($carts, $cart);
                    Session::put('carts',$carts);
                }
            }
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
