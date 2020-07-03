<?php

namespace App\Http\Controllers;
use App\Order;
use App\Product;
use App\Relation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $ordersQuery = Order::query();
      //  $ordersQuery->where('status', 1);

        $allorders = Order::where('status', 1)->get();
        //$allorders = $ordersQuery->paginate(1000);
    
        foreach ($allorders as $key => $item) {
            $allorders[$key]['products'] = $item->orderProducts;
        } 


        return view('home', compact('allorders'));
    }
}
