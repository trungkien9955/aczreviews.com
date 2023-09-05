<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use Session;
class IndexController extends Controller
{
    public function index(){
        Session::put('page', 'home');
        $sections = Section::select('id', 'section_name')->get()->toArray();
        // dd($sections);
        return view('FlowerShop.front.layout.index3', compact('sections'));
    }
}
