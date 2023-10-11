<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\Order;
use App\Models\FlowerShop\Front\Article;


use Session;
class IndexController extends Controller
{
    public function index(){
        Session::put('page', 'home');
        $sections = Section::select('id', 'section_name')->get()->toArray();
        $featured_products = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['is_featured'=> "Yes", 'status'=> 1])->inRandomOrder()->limit(4)->get()->toArray();
        $wedding_flowers = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['section_id'=> 2, 'status'=> 1])->limit(4)->get()->toArray();
        $wedding_trays = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['section_id'=> 4, 'status'=> 1])->limit(4)->get()->toArray();
        $meeting_flowers = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['section_id'=> 3, 'status'=> 1])->limit(4)->get()->toArray();
        $wedding_cars = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['section_id'=> 5, 'status'=> 1])->limit(4)->get()->toArray();
        $homepage_ratings = Order::whereNotNull('feedback')->orWhere('feedback', '<>','')->orderBy('id', 'Desc')->limit(6)->get()->toArray();
        $articles = Article::orderBy('id', 'Desc')->limit(6)->get()->toArray();
        // dd($homepage_ratings);

        // dd($sections);
        return view('FlowerShop.front.layout.index3', compact('sections', 'featured_products','wedding_flowers', 'wedding_trays', 'meeting_flowers', 'wedding_cars', 'homepage_ratings', 'articles'));
    }
    public function get_all_ratings(){
        $homepage_ratings = Order::whereNotNull('feedback')->orWhere('feedback', '<>','')->orderBy('id', 'Desc')->get()->toArray();
        $count = count($homepage_ratings);
        return view('FlowerShop.front.homepage.homepage_ratings', compact('homepage_ratings', 'count'));
    }
    public function get_all_articles(){
        $articles = Article::orderBy('id', 'Desc')->get()->toArray();
        $count = count($articles);
        return view('FlowerShop.front.homepage.all_articles', compact('articles', 'count'));
    }
    public function get_article($id){
        $article_details = Article::find($id)->toArray();
        return view('FlowerShop.front.homepage.article', compact('article_details'));
    }
    public function contact(){
        return view('FlowerShop.front.homepage.contact');
    }
    public function coming_soon(){
        return view('FlowerShop.front.homepage.coming_soon');
    }
}
