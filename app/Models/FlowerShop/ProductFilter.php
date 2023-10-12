<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    use HasFactory;
    public function filter_values(){
        return $this->hasMany('App\Models\FlowerShop\ProductFilterValue', 'filter_id');
    }
    public static function filters(){
        $filters = ProductFilter::with('filter_values')->where('status', 1)->get()->toArray();
        // dd($filters);
        return $filters;
    }
    public static function available_filters($url, $filter_id){
        $section_details = Section::where(['url'=> $url, 'status' => 1])->first()->toArray();
        $section_id_collection = ProductFilter::select('section_ids')->where('id', $filter_id)->first()->toArray();
        $section_id_array = explode(",",  $section_id_collection['section_ids']);
        if(in_array( $section_details['id'], $section_id_array)){
            $is_available = "Yes";
        } else{
            $is_available = "No";
        }
        return $is_available;
    }
    public static function sizes($url){
        $section = Section::where('url', $url)->first()->toArray();
        $product_id_collection = Product::select('id')->where(['section_id'=> $section['id'], 'status' => 1])->pluck('id')->toArray();
        $sizes = ProductAttribute::select('size')->whereIn('product_id', $product_id_collection)->groupBy('size')->pluck('size')->toArray();
        return $sizes;
    }
    public static function colors($url){
        $section = Section::where('url', $url)->first()->toArray();
        $product_id_collection = Product::select('id')->where(['section_id'=> $section['id'], 'status' => 1])->pluck('id')->toArray();
        $colors = Product::select('product_color')->whereIn('id', $product_id_collection)->groupBy('product_color')->pluck('product_color')->toArray();
        return $colors;
    }
    public static function brands($url){
        $section = Section::where('url', $url)->first()->toArray();
        $product_id_collection = Product::select('id')->where(['section_id'=> $section['id'], 'status' => 1])->pluck('id')->toArray();
        $brand_id_collection = Product::select('brand_id')->whereIn('id', $product_id_collection)->groupBy('brand_id')->pluck('brand_id')->toArray();
        $brands = Brand::select('id', 'name')->whereIn('id', $brand_id_collection)->get()->toArray();
        return $brands;
    }
}
