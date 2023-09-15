<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;

use Session;
class IndexController extends Controller
{
    public function index(){
        Session::put('page', 'home');
        $sections = Section::select('id', 'section_name')->get()->toArray();
        $featured_products = Product::select('id', 'product_name', 'product_image', 'product_code', 'product_price')->where(['is_featured'=> "Yes", 'status'=> 1])->inRandomOrder()->limit(4)->get()->toArray();
        $wedding_flowers = Product::select('id', 'product_name', 'product_image', 'product_code', 'product_price')->where(['section_id'=> 2, 'status'=> 1])->limit(4)->get()->toArray();
        $wedding_trays = Product::select('id', 'product_name', 'product_image', 'product_code', 'product_price')->where(['section_id'=> 4, 'status'=> 1])->limit(4)->get()->toArray();
        $meeting_flowers = Product::select('id', 'product_name', 'product_image', 'product_code', 'product_price')->where(['section_id'=> 3, 'status'=> 1])->limit(4)->get()->toArray();
        $wedding_cars = Product::select('id', 'product_name', 'product_image', 'product_code', 'product_price')->where(['section_id'=> 5, 'status'=> 1])->limit(4)->get()->toArray();



        // dd($sections);
        return view('FlowerShop.front.layout.index3', compact('sections', 'featured_products','wedding_flowers', 'wedding_trays', 'meeting_flowers', 'wedding_cars'));
    }
}
