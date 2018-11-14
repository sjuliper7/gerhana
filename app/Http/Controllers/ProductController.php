<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use App\StatusProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('id', 'desc')->get();
        return view('adminlte::products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statusProducts = StatusProduct::all();
        $categoryProducts = CategoryProduct::all();
        return view('adminlte::products.create', compact('statusProducts','categoryProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->weight = $request['weight'];
        $product->description = $request['description'];

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move('images/',$fileName);

        $product->id_status = $request['status-select'];
        $product->id_category = $request['category-select'];
        $product->image = $fileName;

        $product->save();

        //Display a successful message upon save
        return redirect()->route('my-store')
            ->with('flash_message', 'Product,
             '. $product->name.' created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('status','category')->findOrFail($id);
//        dd($product);
        return view ('adminlte::products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $statusProducts  = StatusProduct::all();
        $categoryProducts = CategoryProduct::all();
        return view ('adminlte::products.edit', compact('product','statusProducts','categoryProducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->weight = $request['weight'];
        $product->description = $request['description'];

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        if($fileName != $product->image){
            $request->file('image')->move('images/',$fileName);
            $product->image = $fileName;
        }

        $product->save();

        return redirect()->route('products.show',
            $product->id)->with('flash_message',
            'Article, '. $product->name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('flash_message',
                'Product successfully deleted');
    }
}
