<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view ('product.create');
    }

    public function store (Request $request) {

        // dd ($request->all());

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect (route('home'))->with('message','hai memorizzato correttamente il dato');
    }

    public function index(){

        $products= Product::all();

            return view('product.index', compact('products'));

    }


    public function show(Product $product){

        return view ('product.show', compact ('product'));

    }
}
