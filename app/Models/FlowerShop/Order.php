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
        $order_products = OrderProduct::with(['product'=>function($query){
            $query->select('id', 'section_id', 'product_name', 'product_code', 'product_color', 'product_image');
        }, 'attr'=>function($query){
            $query->select('id', 'size', 'price', 'color', 'v_color');
        }])->where('order_id', $id)->get()->toArray();
        return $order_products;
    }
}
