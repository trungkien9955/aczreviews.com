<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
use Route;
class ProductController extends Controller
{
    public function listing(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $url = $data['url'];
            $section = Section::where(['url' => $url, 'status' => 1])->first()->toArray();
            //  $products = Product::get()->toArray();
            $products = Product::where(['section_id'=> $section['id'], 'status'=>1]);
            // return $products;
            if(isset($data['sorter']) && !empty($data['sorter'])) {
                if ($data['sorter'] == "lowest"){
                    $products->orderBy('product_price', 'Asc' );
                }
                else if ($data['sorter'] == "highest"){
                    $products->orderBy('product_price', 'Desc');
                }
            }
            if(isset($data['brand']) && !empty($data['brand'])) {
                $product_id_array = Product::select('id')->whereIn('brand_id', $data['brand'])->pluck('id')->toArray();
                $products->whereIn('id',$product_id_array );
            }
            if(isset($data['color']) && !empty($data['color'])) {
                $products->whereIn('product_color',$data['color']);
            }
            if(isset($data['size']) && !empty($data['size'])) {
                $product_id_array = ProductAttribute::select('product_id')->whereIn('size', $data['size'])->pluck('product_id')->toArray();
                $products->whereIn('id',  $product_id_array);
            }
            $products = $products->get()->toArray();
            return view('FlowerShop.front.products.ajax_products_listing', compact('products'));
        }
        else {
            $url = Route::getFacadeRoot()->current()->uri(); 
            $section = Section::select('id', 'section_name', 'url')->where('url', $url)->first()->toArray();
            $products = Product::where('section_id', $section['id']);
            if(isset($_GET['sorter']) && !empty($_GET['sorter'])){
                if($_GET['sorter'] == "lowest") {
                    $products = $products->orderBy('product_price', 'Asc');
                }
                else if ($_GET['sorter'] == "highest") {
                    $products = $products->orderBy('product_price', 'Desc');
                }
            }
            $products = $products->get()->toArray();
            $count = count($products);
            // dd($products);
            return view('FlowerShop.front.products.listing', compact('products', 'section', 'count', 'url'));
        }
        // dd($url);
    }
}
