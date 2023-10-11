<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\ProductFilter;
use App\Models\FlowerShop\Brand;
use App\Models\FlowerShop\ProductImage;
use App\Models\FlowerShop\ProductAttribute;
use App\Models\FlowerShop\Color;

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
            $section_details = Section::where('id', $product['section_id'])->first()->toArray();
            // echo "<pre>"; print_r($product);
            $message = "Product updated successfully!";
            // dd($product);
        }
        if($request->isMethod('post')) {
            $data = $request->all();
            // dd($section_details);
            $validator = Validator::make($data, $rules = [
                'product_name' => 'required|regex:/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i',
                'product_price' => 'required|numeric',
                'product_color' => 'required|regex:/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i',
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
                   Image::make($image_tmp)->resize(277,366)->save($smallImagePath);
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
            //add filters
            $filters = ProductFilter::filters();
            foreach($filters as $filter){
                $available_filter = ProductFilter::available_filters($section_details['url'], $filter['id']);
                // echo $data[$filter['filter_column']]; die;
                if($available_filter == "Yes") {
                    if(isset($filter['filter_column']) && $data[$filter['filter_column']]){
                        $product->{$filter['filter_column']} = $data[$filter['filter_column']];
                    }
                }
            }
            $product->section_id = $data['section_id'];
            $product->brand_id = $data['brand_id'];
  
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
            if(!empty($data['has_attribute'])) {
                $product->product_attribute = $data['has_attribute'];
            }else {
                $product->product_attribute = 'no';
            }
            $product->status = 1;
            $product->save();
            return redirect('admin/products')->with('success_message', $message);
        }  
        $sections = Section::get()->toArray();
        $brands = Brand::where('status', 1)->get()->toArray();
        return view('FlowerShop.admin.products.add_edit_product')->with(compact('title', 'sections', 'brands', 'product', 'section_details'));
    }
    public function add_images(Request $request, $id){
        $product_details = Product::with('images')->find($id);
        if($request->isMethod('post')){
            if($request->hasFile('images')){
                $images = $request->file('images');
                foreach($images as $key=>$image){
                    $image_tmp = Image::make($image);
                    $image_original_name = $image->getClientOriginalName();
                    $extension = $image->getClientOriginalExtension();
                    $image_name = rand(111, 99999).'.'.$extension;
                    $large_image_path = 'FlowerShop/front/images-3/product_images/large/'.$image_name;
                    $medium_image_path = 'FlowerShop/front/images-3/product_images/medium/'.$image_name;
                    $small_image_path = 'FlowerShop/front/images-3/product_images/small/'.$image_name;
                    Image::make($image_tmp)->resize(1000, 1000)->save($large_image_path);
                    Image::make($image_tmp)->resize(1000, 1000)->save($medium_image_path);
                    Image::make($image_tmp)->resize(1000, 1000)->save($small_image_path);
                    //add images to db
                    $image = new ProductImage;
                    $image->product_id = $id;
                    $image->image = $image_name;
                    $image->status = 1;
                    $image->save();
                }
            }
            return redirect()->back()->with('success_message', 'Đã thêm hình ảnh sản phẩm!');
        }
        return view('FlowerShop/admin.product_images.add_images', compact('product_details'));
    }
    public function add_edit_attributes(Request $request, $id){
        $product_details = Product::with('attributes')->find($id);
        $colors = Color::select('id', 'name', 'v_name')->get()->toArray();
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            foreach($data['sku'] as $key => $value){
                if(!empty($value)) {
                    $attribute = new ProductAttribute;
                    if(!empty($data['image'][$key])){
                        $image = $data['image'][$key];
                        $image_tmp = Image::make($image);
                        $image_original_name = $image->getClientOriginalName();
                        $extension = $image->getClientOriginalExtension();
                        $image_name = 'attribute'.'-product-'.$id.'-'.rand(111, 999).'.'.$extension;
                        $large_image_path = 'FlowerShop/front/images-3/product_images/large/'.$image_name;
                        $medium_image_path = 'FlowerShop/front/images-3/product_images/medium/'.$image_name;
                        $small_image_path = 'FlowerShop/front/images-3/product_images/small/'.$image_name;
                        Image::make($image_tmp)->resize(1000, 1000)->save($large_image_path);
                        Image::make($image_tmp)->resize(1000, 1000)->save($medium_image_path);
                        Image::make($image_tmp)->resize(1000, 1000)->save($small_image_path);
                        $attribute->image = $image_name;
                    }
                    if(!empty($data['color'][$key])){
                        if($data['color'][$key] == "red"){
                            $v_color = "Đỏ";
                        }
                        else if ($data['color'][$key] == "pink") {
                            $v_color = "Hồng";
                        }else if ($data['color'][$key] == "green") {
                            $v_color = "Xanh lục";
                        }
                    }
                    $attribute->product_id = $id;
                    $attribute->sku = $value;
                    if(!empty($data['size'][$key])) {
                        $attribute->size = $data['size'][$key];
                    }else{
                        $attribute->size = '';
                    }
                    $attribute->price = $data['price'][$key];
                    $attribute->color = $data['color'][$key];
                    if(!empty($data['color'][$key])) {
                        $attribute->v_color = $data['color'][$key];
                    }else{
                        $attribute->v_color = '';
                    }
                    $attribute->stock = $data['stock'][$key];
                    $attribute->status = 1;
                    $attribute->save();
                }
            }
            return redirect()->back()->with('success_message', 'Đã thêm thuộc tính sản phẩm!');
        }
        return view('FlowerShop.admin.attributes.add_edit_attributes', compact('product_details', 'colors'));
    }
}
