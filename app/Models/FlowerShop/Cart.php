<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
class Cart extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\FlowerShop\Product', 'product_id');
    }
    public function attr(){
        return $this->belongsTo('App\Models\FlowerShop\ProductAttribute', 'attr_id');
    }
    public static function get_items(){
        if(Auth::check()){
            $items = Cart::with(['product'=>function($query){
                $query->select('id', 'section_id', 'product_name', 'product_code', 'product_color', 'product_image');
            }, 'attr'=>function($query){
                $query->select('id', 'size', 'price', 'color', 'v_color');
            }])->where(['session_id'=> Session::get('session_id'),'user_id'=> Auth::user()->id])->orderBy('id','Desc')->get()->toArray();
        }else{
            $items = Cart::with(['product'=>function($query){
                $query->select('id', 'section_id', 'product_name', 'product_code', 'product_color', 'product_image');
            }, 'attr'=>function($query){
                $query->select('id', 'size', 'price', 'color', 'v_color');
            }])->where('session_id', Session::get('session_id'))->orderBy('id','Desc')->get()->toArray();
        }
        return $items;
    }
    public static function get_total_price(){
        if(!Auth::check()){
            $sub_total_collection = Cart::select('sub_total')->where('session_id', Session::get('session_id'))->pluck('sub_total')->toArray();
            $total_price = array_sum($sub_total_collection);
            return $total_price;
        }else{
            $sub_total_collection = Cart::select('sub_total')->where('user_id', Auth::user()->id)->pluck('sub_total')->toArray();
            $total_price = array_sum($sub_total_collection);
            return $total_price;
        }
    }
}
