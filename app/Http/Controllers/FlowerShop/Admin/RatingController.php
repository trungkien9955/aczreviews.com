<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Rating;
use Session;
class RatingController extends Controller
{
    public function ratings(){
        Session::put('page', 'ratings');
        $ratings = Rating::with(['product'=>function($query){
            $query->select('id', 'product_name');
        }, 'user'])->get()->toArray();
        return view('FlowerShop.admin.ratings.ratings', compact('ratings'));
    }
}
