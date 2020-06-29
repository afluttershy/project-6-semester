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



    public function cartconfirm(Request $request) {

        $orderID = session('orderID');
        if (is_null($orderID)) {
            return redirect()->route('cart');
        } 
        $order = Order::find($orderID);

        $order->street = $request->street;
        $order->house = $request->house;
        $order->flat = $request->flat;
        $order->name = $request->name;
        $order->tel = $request->tel;
        
        $order->status = 1;
        
        $order->save();

        session()->forget('orderID');

        session()->flash('success', 'Ваш заказ принят в обработку! Вам скоро перезвонят.');
        return redirect()->route('menu');

        //dd($request->name);

    }


}
