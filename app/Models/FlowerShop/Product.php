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
    public function gifts(){
        return $this->hasMany('App\Models\FlowerShop\Gift', 'product_id');
    }
    public function offers(){
        return $this->hasMany('App\Models\FlowerShop\Offer', 'product_id');
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
    public static function get_guest_rating($id){
        $count = RatingInfo::where('product_id', $id)->count();
        if($count ==0){
            $is_rated_by_guest = "no";
            return array('is_rated_by_guest'=> $is_rated_by_guest);
        }else{
            $is_rated_by_guest = "yes";
            $guest_rating_info = RatingInfo::where('product_id', $id)->get()->toArray();
            $guest_rating_comment = RatingInfo::where('product_id', $id)->get()->toArray();
            // dd($rating_info);
            $guest_rating_count = $count;
            $guest_total_score = array_sum(RatingInfo::where('product_id', $id)->pluck('rating')->toArray());
            $guest_rating_float = $guest_total_score/$guest_rating_count;
            $guest_product_rating = round($guest_rating_float, 1);
            return array('is_rated_by_guest'=> $is_rated_by_guest,'guest_rating_info'=> $guest_rating_info,'guest_rating_count'=> $guest_rating_count, 'guest_product_rating'=> $guest_product_rating);
        }
    }
    public static function get_rating($id){
        $product_rating_count =Rating::where('product_id', $id)->count();
        if($product_rating_count==0){
            $is_rated = "no";
            return $is_rated;
        }else{
            $is_rated = "yes";
            $rating_info = Rating::with('user')->where('product_id', $id)->get()->toArray();
            $product_total_score = array_sum(Rating::where('product_id', $id)->pluck('rating')->toArray());
            $product_rating_float = $product_total_score/$product_rating_count;
            $product_rating = round($product_rating_float, 1);
            $product_rating_for_star = round($product_rating_float);
            return array('is_rated'=> $is_rated,'rating_info'=> $rating_info,'product_rating_count'=> $product_rating_count, 'product_rating'=> $product_rating, 'product_rating_for_star'=>$product_rating_for_star);
        }
    }
    public static function is_new($id){
        $new_product_id_collection = Product::select('id')->where('status', 1)->orderBy('id', 'Desc')->limit(5)->pluck('id')->toArray();
        if(in_array($id, $new_product_id_collection)){
            $is_new = "yes";
        }else{
            $is_new = "no";
        }
        return $is_new;
    }
}
