<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $product = Products::find($request->product_id);
        $cart = Session::get('cart', []);
        $cart[$product->id] = [
            "product_name" => $product->product_name,
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
        // Save the address in the user's profile
        $user = Auth::user();
       

        // Create a new transaction
        $transaction = new Transaction();
        $transaction->id = $request->id;
        $transaction->user_id = $user->id;
        $transaction->address = $request->address;
        $transaction->payment_proof = $request-> payment;
        $transaction->total_amount = array_reduce(Session::get('cart'), function ($total, $details) {
            return $total + ($details['price'] * $details['quantity']);
        }, 0);
        $transaction->save();

        // Clear the cart
        Session::forget('cart');

        return redirect()->route('cart.index')->with('status', 'Checkout successful. Your transaction has been recorded.');
    }
}
