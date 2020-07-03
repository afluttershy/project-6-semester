<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function orderProducts() {
        return $this->belongsToMany(Product::class, 'order_product');
    }

    public function getFullPrice(){
        $sum=0;
        foreach($this->products as $product){
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }
}
