<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    public static function stock($product_id){
        $stock = ProductAttribute::select('stock')->where(['product_id'=> $product_id])->sum('stock');
        return $stock;
    }
    public static function get_attr_with_color($product_id){
        return $attr_with_color = ProductAttribute::where('product_id', $product_id)->where('color', '!=', '')->get()->toArray();
    }
    public static function get_attr_with_size($product_id){
        return $attr_with_size = ProductAttribute::where('product_id', $product_id)->where('size', '!=', '')->get()->toArray();
    }
    public static function get_lowest_attr_price($product_id){
        $attr_prices = ProductAttribute::select('price')->where('product_id', $product_id)->pluck('price')->toArray();
        return $lowest_price = min($attr_prices);
        $lowest_attr =  ProductAttribute::select('size')->where('product_id', $product_id)->pluck('size')->toArray();
    }
    public static function get_attr_with_lowest_price($product_id){
        $attr_prices = ProductAttribute::select('price')->where('product_id', $product_id)->pluck('price')->toArray();
         $lowest_price = min($attr_prices);
         return $lowest_attr =  ProductAttribute::where('product_id', $product_id)->where('price', $lowest_price)->first()->toArray();
    }
    public static function get_lowest_attr_size($product_id){
        $attr_prices = ProductAttribute::select('price')->where('product_id', $product_id)->pluck('price')->toArray();
        $lowest_price = min($attr_prices);
        return $lowest_size =  ProductAttribute::select('size')->where('price', $lowest_price)->first()->pluck('size');
    }
}
