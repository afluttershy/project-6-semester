<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Product extends Model
{
    protected $table = 'pdproducts'; 

    public function orders(){
        //return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
        return $this->belongsToMany(Order::class, 'order_product');
    }
    public function getPriceForCount(){
        if(!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }
}
