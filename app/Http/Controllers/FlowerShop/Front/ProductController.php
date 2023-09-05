<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;
use Route;
class ProductController extends Controller
{
    public function listing(){
        // dd($url);
        $url = Route::getFacadeRoot()->current()->uri(); 
        $section = Section::select('id', 'section_name')->where('url', $url)->first()->toArray();
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
        return view('FlowerShop.front.products.listing', compact('products', 'section', 'count'));
    }
}
