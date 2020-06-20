<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function sale() {
        return view('sale');
    }
    public function menu() {
        $productsmodel = Product::get();
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
    // public function menuitem() {
    //     return view('menu-item');
    //  }
}
