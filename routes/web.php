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
        //coupons
        Route::match(['get', 'post'], 'coupons', 'CouponController@coupons');
        Route::match(['get', 'post'], 'add-edit-coupons/{id?}', 'CouponController@add_edit_coupons');
        //order
        Route::get('orders', 'OrderController@orders');
        Route::get('order-pdf/{id}', 'OrderController@view_pdf_order');
        //subscribers
        Route::get('subscribers', 'NewsletterController@subscribers');
        Route::get('export-subscribers', 'NewsletterController@export_subscribers');
        //ratings
        Route::get('ratings', 'RatingController@ratings');
        Route::post('add-rating', 'RatingController@add_rating');
        //users
        Route::get('users', 'UserController@users');

    });
});
Route::get('order/invoice/download/{id}', 'OrderController@view_pdf_order');

Route::namespace('App\Http\Controllers\FlowerShop\Front')->group(function(){
    Route::match(['get', 'post'],'/', 'IndexController@index');
    //Listing
    $section_url = Section::select('url')->where('status', 1)->get()->pluck('url')->toArray();
    // dd($section_url); 
    foreach($section_url as $key => $url) {
        Route::match(['get', 'post'],'/'.$url, 'ProductController@listing');
    }
    Route::get('/coming-soon', 'IndexController@coming_soon');
    Route::get('/home/{section}/{size}', 'ProductController@home_size_listing');

    // dd($routes);
    // Route::match(['get', 'post'],'/{url}', 'ProductController@listing');
    Route::get('/featured', 'ProductController@get_featured_products');
    Route::match(['get', 'post'],'/product/{id}', 'ProductController@detail');
    Route::post('/size-selection', 'ProductController@display_on_size_selection');
    Route::post('/color-selection', 'ProductController@display_on_color_selection');
    //product rating form 
    Route::post('/product-rating-form', 'ProductController@rating_form_handler');
    Route::post('/product-comment', 'ProductController@product_comment');
    //cart
    Route::post('/cart/add', 'ProductController@cart_add');
    Route::post('/cart/delete', 'ProductController@cart_delete');
    Route::get('/cart', 'ProductController@cart');
    Route::post('/coupon-code', 'ProductController@check_coupon');
    Route::post('/cart-quantity-minus', 'ProductController@cart_quantity_minus');
    Route::post('/cart-quantity-plus', 'ProductController@cart_quantity_plus');
    Route::post('/cart-quantity-change', 'ProductController@cart_quantity_change');

    //checkout
    Route::get('/checkout', 'ProductController@checkout');
    Route::post('/place-order', 'ProductController@place_order');
    //order
    Route::get('/order-details/{id}', 'ProductController@order_details');

    //select province
    Route::post('/province-selected', 'ProductController@get_districts_after_province');
    Route::post('/district-selected', 'ProductController@get_wards_after_district');

    //user login/register
    Route::get('user/login-register', 'UserController@login_register');
    Route::post('user/register', 'UserController@user_register');
    Route::post('user/login', 'UserController@user_login');
    Route::post('user/logout', 'UserController@user_logout');
    //confirm user account
    Route::get('/user/confirm/{code}', 'UserController@user_confirm');
    //subscriber email
    Route::post('/subscriber-email', 'NewsletterController@get_subscriber_email');
    //export subscribers
    //add rating
    Route::post('add-rating', 'RatingController@add_rating');
    Route::post('user-rating', 'RatingController@user_rating');
    Route::post('guest-rating', 'RatingController@guest_rating');
    //search
    Route::get('/search', 'ProductController@search');
    //all homepage ratings
    Route::get('/all-ratings', 'IndexController@get_all_ratings');
    Route::get('/all-articles', 'IndexController@get_all_articles');
    Route::get('/article/{id}', 'IndexController@get_article');
    //home-contact
    Route::get('/contact', 'IndexController@contact');
});
