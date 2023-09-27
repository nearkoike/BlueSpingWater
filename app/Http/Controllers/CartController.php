<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;

class CartController extends Controller
{
    public function cart() {
        $cart = Cart::where(['user_id' => auth()->user()->id, 'order_status' => 1])->get();
        return view('cart')->with(compact('cart'));
    }
    public function add_to_cart($product_id) {
        $product = Product::find($product_id);
        $check_cart = Cart::where([
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'order_status' => 1])->first();
        
        if(!$check_cart) {
            Cart::create([
                'user_id' => auth()->user()->id, 
                'product_id' => $product->id, 
                'quantity' => 1, 
                'price' => $product->price, 
                'order_status' => 1
            ]);
        }
        $cart = Cart::where(['user_id' => auth()->user()->id, 'order_status' => 1])->get();
        return view('cart')->with(compact('cart'));
    }

    public function edit_cart(Request $request, $cart_id) {
        $cart = Cart::find($cart_id);
        $cart->quantity = $request->input('quantity');
        $cart->price = $request->input('quantity') *  $cart->product->price;
        $cart->save();


        return redirect('/cart');
    }
    public function delete_cart($cart_id) {
        Cart::find($cart_id)->delete();

        return redirect('/cart');
    }

    public function checkout_cart() {
        $totalSales = Cart::where([
            'user_id' => auth()->user()->id,
            'order_status' => 1
        ])->sum('price');

        $sale = Sale::create([
            'user_id' => auth()->user()->id,
            'amount' => $totalSales,
        ]);


        Cart::where([
            'user_id' => auth()->user()->id,
            'order_status' => 1
        ])->update(['order_status' => 2, 'sale_id' => $sale->id]);
        
        
        return redirect('/');
    }
}
