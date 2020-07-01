<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function sale() {
        return view('sale');
    }
    public function menu(Request $request) {
        $productsQuery = Product::query();

        if ($request->filled('from')){
            $productsQuery->where('price', '>=', $request->from);
        }
        if ($request->filled('to')){
            $productsQuery->where('price', '<=', $request->to);
        }

        foreach (['pizza', 'sushi', 'drink', 'sweet'] as $field) {
            if ($request->has($field)){
                $productsQuery->where($field, 1);
            }
        }

        if ($request->filled('search')){
            $search = $request->input('search');
            $productsQuery->where('name', 'like', "%$search%");
        }
            


        $productsmodel = Product::get();
        $productsmodel = $productsQuery->paginate(6)->withPath("?" . $request->getQueryString());

        return view('menu', compact('productsmodel'));
    }
    public function contacts() {
        return view('contacts');
    }

    public function auth() {
        return view('auth/auth');
    }
    public function cart() {
        return view('cart');
    }

    public function editor() {
        return view('editor');
    }

    public function myorders() {
        $id = Auth::id();
        $ordersQuery = Order::query();
        $ordersQuery->where('user_id', $id);
        $ordersQuery->where('status', 1);


        $myorders = Order::get();
        $myorders = $ordersQuery->paginate(100);
        return view('myorders', compact('myorders'));
    }
    
    // public function menuitem() {
    //     return view('menu-item');
    //  }
}
