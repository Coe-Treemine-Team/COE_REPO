<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('checkout.index', compact('cartItems'));
    }

    public function process(Request $request)
    {
        // Implement payment processing logic here

        // Clear the cart after successful payment
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('home')->with('success', 'Payment successful!');
    }
}

