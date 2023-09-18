<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function section(){
        return $this->belongsTo('App\Models\FlowerShop\Section', 'section_id');
    }
    public function brand(){
        return $this->belongsTo('App\Models\FlowerShop\Brand', 'brand_id');
    }
    public function attributes(){
        return $this->hasMany('App\Models\FlowerShop\ProductAttribute');
    }
    public function images(){
        return $this->hasMany('App\Models\FlowerShop\ProductImage');
    }
    public function descriptions(){
        return $this->hasMany('App\Models\FlowerShop\ProductDescription');
    }
    public static function discounted_price($id){
        $product_details = Product::select('id', 'product_price', 'product_discount')->where('id', $id)->first()->toArray();
        if($product_details['product_discount']> 0){
            $discounted_price = $product_details['product_price'] - ($product_details['product_price']*$product_details['product_discount']/100);
            $saving = $product_details['product_price'] -  $discounted_price;
        }
        return array('discounted_price'=> $discounted_price, 'saving'=>$saving);
    }
    public static function get_description($id){
        $description = ProductDescription::where('product_id', $id)->first()->toArray();
        return $description;
    }
    public static function get_rating_info($id){
        $rating_info = RatingInfo::where('product_id', $id)->Paginate(5);
        $rating_comment = RatingInfo::where('product_id', $id)->get()->toArray();
        // dd($rating_info);
        $product_rate_count =count(RatingInfo::where('product_id', $id)->get()->toArray());
        $product_total_score = array_sum(RatingInfo::where('product_id', $id)->pluck('rating')->toArray());
        $product_rating_float = $product_total_score/$product_rate_count;
        $product_rating = round($product_rating_float, 1);
        return array('rating_info'=> $rating_info,'product_rate_count'=> $product_rate_count, 'product_rating'=> $product_rating);
    }
}
