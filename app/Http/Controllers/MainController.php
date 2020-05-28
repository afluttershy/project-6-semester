<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function sale() {
        return view('sale');
    }
    public function menu() {
        return view('menu');
    }
    public function contacts() {
        return view('contacts');
    }

    public function auth() {
        return view('auth');
    }
    public function cart() {
        return view('cart');
    }
}
