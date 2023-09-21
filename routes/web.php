<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\FlowerShop\Section;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\FlowerShop\Admin')->group(function(){
    Route::match(['get', 'post'],'login', 'AdminController@login');
    Route::group(['middleware'=>['admin']], function() {
        Route::get('dashboard', 'AdminController@dashboard');
        //products
        Route::get('products', 'ProductController@products');
        Route::match(['get', 'post'], 'add-edit-products/{id?}', 'ProductController@add_edit_products');
        //filters
        Route::get('filters', 'FilterController@filters');
        Route::match(['get', 'post'], 'add-edit-filters/{id?}', 'FilterController@add_edit_filters');
        //images
        Route::match(['get', 'post'], 'add-images/{id}', 'ProductController@add_images');
        //attributes
        Route::match(['get', 'post'], 'add-edit-attributes/{id}', 'ProductController@add_edit_attributes');

    });
});
Route::namespace('App\Http\Controllers\FlowerShop\Front')->group(function(){
    Route::match(['get', 'post'],'/', 'IndexController@index');
    //Listing
    $section_url = Section::select('url')->where('status', 1)->get()->pluck('url')->toArray();
    // dd($section_url); 
    foreach($section_url as $key => $url) {
        Route::match(['get', 'post'],'/'.$url, 'ProductController@listing');
    }
    // Route::match(['get', 'post'],'/{url}', 'ProductController@listing');
    Route::match(['get', 'post'],'/product/{id}', 'ProductController@detail');
    Route::post('/size-selection', 'ProductController@display_price_on_size_selection');
    Route::post('/color-selection', 'ProductController@display_image_on_color_selection');
    //product rating form 
    Route::post('/product-rating-form', 'ProductController@rating_form_handler');
    Route::post('/product-comment', 'ProductController@product_comment');
    //cart
    Route::post('/cart/add', 'ProductController@cart_add');
    Route::post('/cart/delete', 'ProductController@cart_delete');
    Route::get('/cart', 'ProductController@cart');

});

