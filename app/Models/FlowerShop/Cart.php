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
    public static function get_items(){
        if(Auth::check()){
            $items = Cart::with(['product'=>function($query){
                $query->select('id', 'section_id', 'product_name', 'product_code', 'product_color', 'product_image');
            }])->where('user_id', Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
        }else{
            $items = Cart::with(['product'=>function($query){
                $query->select('id', 'section_id', 'product_name', 'product_code', 'product_color', 'product_image');
            }])->where('session_id', Session::get('session_id'))->orderBy('id','Desc')->get()->toArray();
        }
        return $items;
    }
}
