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


Route::namespace('App\Http\Controllers\FlowerShop\Front')->group(function(){
    Route::match(['get', 'post'],'/', 'IndexController@index');
    //Listing
    $section_url = Section::select('url')->where('status', 1)->get()->pluck('url')->toArray();
    // dd($section_url); 
    foreach($section_url as $key => $url) {
        Route::match(['get', 'post'],'/'.$url, 'ProductController@listing');
    }
    // Route::match(['get', 'post'],'/{url}', 'ProductController@listing');
});

