<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\CartConfirm;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart() {
        $orderID = session('orderID');
        if (!is_null($orderID)) {
            $order = Order::findOrFail($orderID);
           
        } else {
            $order = null;
        }
//dd($order->products->count());
        
        return view('cart', compact('order'));
    }


  //  public function cart() {
    //    $orderID = session('orderID');
      //  if (!is_null($orderID)) {
        //    $order = Order::create()->id;
           
        //} else{
          //  $order = Order::find($orderID);
       // }

        
       // return view('cart', compact('order'));
   // }

    public function cartadd($productID) {
        $orderID = session('orderID');
        if (is_null($orderID)) {
            $order = Order::create();
            session(['orderID' => $order->id]);
        } else {
            $order = Order::find($orderID);
        }
        if($order->products->contains($productID)){
            $pivotRow = $order->products()->where('product_id', $productID)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order -> products()->attach($productID);
        }

        if (Auth::check()) {
             $order->user_id = Auth::id();
             $order->save();
        }

        //$order -> products()->attach($productID);

        //dump($order->products);
        // dump($order);

        //return view('cart', compact('order'));
        return redirect()->route('cart');
    }


    public function cartremove($productID) {
        $orderID = session('orderID');
        if (is_null($orderID)) {
            return redirect()->route('cart');
        } 
        $order = Order::find($orderID);

        if($order->products->contains($productID)){
            $pivotRow = $order->products()->where('product_id', $productID)->first()->pivot;
            if($pivotRow->count < 2){
                $order -> products()->detach($productID);
            }else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }



        //$order->products()->detach($productID);
        return redirect()->route('cart');
    }



    public function cartconfirm(CartConfirm $request) {

        $orderID = session('orderID');
        if (is_null($orderID)) {
            return redirect()->route('cart');
        } 
        $order = Order::find($orderID);

        $price = $order->getFullPrice();

        //dd($price);

        $order->street = $request->street;
        $order->house = $request->house;
        $order->flat = $request->flat;
        $order->name = $request->name;
        $order->tel = $request->tel;
        $order->payment = $price;
        $order->status = 1;
        
        $order->save();
        //dd($request->name);
        session()->forget('orderID');

        session()->flash('success', 'Ваш заказ принят в обработку! Вам скоро перезвонят.');
        return redirect()->route('menu');

        //dd($request->name);

    }


}
