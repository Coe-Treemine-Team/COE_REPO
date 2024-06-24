<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $product = products::find($request->product_id);
        $cart = Session::get('cart', []);
        $cart[$product->id] = [
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->images
        ];

        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function update(Request $request, Products $product)
    {
        $cart = Session::get('cart', []);
        $cart[$product->id]['quantity'] = $request->quantity;

        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function remove(Products $product)
    {
        $cart = Session::get('cart', []);
        unset($cart[$product->id]);

        Session::put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function checkout(Request $request)
    {
        // Implement payment logic here
        Session::forget('cart');
        return redirect()->route('cart.index')->with('success', 'Payment Successful!');
    }
}


