<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use App\StatusProduct;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerProductController extends Controller
{
    public function index($name){
        $store = Store::where(['store_name' => $name])->firstOrFail();
        $products = $store->products;

        return view('owner-product.index',compact('products'));
    }

    public function create(){
        $statusProducts = StatusProduct::all();
        $categoryProducts = CategoryProduct::all();
        return view('owner-product.create',compact('statusProducts','categoryProducts'));
    }

    public function store(Request $request){
        $store = Auth::user()->store;

        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->description = $request['description'];
        $product->id_status = $request['status-select'];
        $product->id_category = $request['category-select'];
        $product->id_store = $store->id;


        if($request->hasfile('images'))
        {

            foreach($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move('images/', $name);
                $data[] = $name;
            }
        }

        $images = json_encode($data);
        $product->images = $images;

        $product->save();

        return redirect(url($store->store_name.'/products'));
    }

    public function show($id){
        $product = Product::with('status','category')->findOrFail($id);
//        dd($product);
        return view ('owner-product.show', compact('product'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->description = $request['description'];

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        if($fileName != $product->image){
            $request->file('image')->move('images/',$fileName);
            $product->image = $fileName;
        }

        $product->save();

        return redirect()->route('owner-product.show',
            $product->id)->with('flash_message',
            'Article, '. $product->name.' updated');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $statusProducts  = StatusProduct::all();
        $categoryProducts = CategoryProduct::all();
        return view ('owner-product.edit', compact('product','statusProducts','categoryProducts'));
    }
}
