<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Sale;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $sales = Sale::all();

        return view('admin')->with(compact('sales'));
    }

    public function delete($sale_id) {
        Cart::where('sale_id', $sale_id)->delete();
        Sale::find($sale_id)->delete();

        return redirect('/admin');
    }
}
