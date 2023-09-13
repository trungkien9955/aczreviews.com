<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\ProductFilter;
use App\Models\FlowerShop\Brand;
use Validator;
use Image;
class ProductController extends Controller
{
    public function products(){
        $products = Product::with('section')->get()->toArray();
        return view('FlowerShop.admin.products.products', compact('products'));
    }
    public function add_edit_products(Request $request, $id = null) {
        if($id == "") {
            $title = "Add Product";
            $product= new Product;
            $message = "Product added successfully!";
        }
        else{
            $title = "Edit Product";
            $product = Product::find($id);
            $section = Section::where('id', $product['section_id'])->first()->toArray();
            // echo "<pre>"; print_r($product);
            $message = "Product updated successfully!";
            // dd($product);
            
        }
        if($request->isMethod('post')) {
            $data = $request->all();
            $validator = Validator::make($data, $rules = [
                'product_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'product_code' => 'required|regex:/^\w+$/',
                'product_price' => 'required|numeric',
                'product_color' => 'required|regex:/^[\pL\s\-]+$/u',
                'url' => 'required'
            ],
            $customMessages = [
                'product_name.required' => 'Name is required!',
                'product_name.regex' => 'Valid name is required!',
                'product_code.required' => 'Code is required!',
                'product_code.regex' => 'Valid code is required!',
                'product_price.required' => 'Price is required!',
                'product_price.regex' => 'Valid price is required!',
                'product_color.required' => 'Color is required!',
                'product_color.regex' => 'Valid color is required!',
                'url.required' => 'URL is required!'
            ]
            )->validate();
            if($request->hasFile('product_image')){
                $image_tmp = $request->file('product_image');
                if($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension(); 
                     $imageName = rand(111,99999).'.'.$extension; 
                     $largeImagePath = 'FlowerShop/front/images-3/product_images/large/'.$imageName;
                     $mediumImagePath = 'FlowerShop/front/images-3/product_images/medium/'.$imageName;
                     $smallImagePath = 'FlowerShop/front/images-3/product_images/small/'.$imageName;

                   Image::make($image_tmp)->resize(1000,1000)->save($largeImagePath);
                   Image::make($image_tmp)->resize(500,500)->save($mediumImagePath);
                   Image::make($image_tmp)->resize(250,250)->save($smallImagePath);
                   $product->product_image = $imageName;
               }
            }
            if($request->hasFile('product_video')){
                $video_tmp = $request->file('product_video');
                if($video_tmp->isValid()){
                    $video_name = $video_tmp->getClientOriginalName();
                    $extension = $video_tmp->getClientOriginalExtension();
                    $videoName = $video_name.'.'.rand().'.'.$extension;
                    $videoPath = 'FlowerShop/front/videos/product_videos/';
                    $video_tmp->move($videoPath, $videoName);
                    $product->product_video = $videoName;
                }
            }
            $section_details = Section::find($data['section_id']);
            $product->section_id = $section_details['section_id'];
            $product->brand_id = $data['brand_id'];
            $product_filters = ProductFilter::filters();
            foreach($product_filters as $filter){
                $available_filter = ProductFilter::available_filters($section['url'], $filter['id']);
                if($available_filter == "Yes") {
                    if(isset($filter['filter_column']) && $data[$filter['filter_column']]){
                        $product->{$filter['filter_column']} = $data[$filter['filter_column']];
                    }
                }
            }
            if(empty($data['product_price'])) {
                $data['product_price'] = 0;
            } 
            if(empty($data['product_discount'])) {
                $data['product_discount'] = 0;
            } 
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            $product->product_color = $data['product_color'];
            $product->product_price = $data['product_price'];
            $product->product_discount = $data['product_discount'];
            $product->description = $data['description'];
            $product->meta_title = $data['meta_title'];
            $product->meta_description = $data['meta_description'];
            $product->meta_keywords = $data['meta_keywords'];
            if(!empty($data['is_featured'])) {
                $product->is_featured = $data['is_featured'];
            }else {
                $product->is_featured = 'No';
            }
            $product->status = 1;
            $product->save();
            return redirect('admin/products')->with('success_message', $message);
        }  
        $sections = Section::get()->toArray();
        $brands = Brand::where('status', 1)->get()->toArray();
        return view('FlowerShop.admin.products.add_edit_product')->with(compact('title', 'sections', 'brands', 'product', 'section'));
    }
}
