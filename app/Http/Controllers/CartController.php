<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        $orderID = session('orderID');
        if (!is_null($orderID)) {
            $order = Order::findOrFail($orderID);
           
        } 


        return view('cart', compact('order'));
    }

    public function cartadd($productID) {
        $orderID = session('orderID');
        if (is_null($orderID)) {
            $order = Order::create()->id;
            session(['orderID' => $order->id]);
        } else {
            $order = Order::find($orderID);
        }
        $order -> products()->attach($productID);

        //dump($order->products);
       // dump($order);

        return view('cart', compact('order'));
    }
}
