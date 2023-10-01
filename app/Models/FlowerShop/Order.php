<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function order_products(){
        return $this->hasMany('App\Models\FlowerShop\OrderProduct', 'order_id');
    }
    public static function get_order_products($id){
        $order_products = OrderProduct::where('order_id', $id)->get()->toArray();
        return $order_products;
    }
}
