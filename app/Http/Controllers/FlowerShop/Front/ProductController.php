<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
use App\Models\FlowerShop\Cart;
use Route;
use DB;
use Validator;
use Session;
use Auth;
use App\Models\FlowerShop\RatingInfo;
use Illuminate\Support\Facades\View;
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
            if(isset($data['price']) && !empty($data['price'])) {
                foreach($data['price'] as $key => $price){
                    $priceArr = explode("-",  $price);
                    $productIds[]  = Product::select('id')->whereBetween('product_price', [$priceArr[0], $priceArr[1]])->pluck('id')->toArray();
                }
                $productIds = call_user_func_array('array_merge', $productIds);
                $products->whereIn('id', $productIds);
            }
            // $filters = ProductFilter::filters();
            // foreach($filters as $key => $filter) {
            //     //if filter is selected
            //     if(isset($filter['filter_column']) && isset($data[$filter['filter_column']]) && !empty($filter['filter_column']) && !empty($data[$filter['filter_column']])) {
            //         $products->whereIn($filter['filter_column'], $data[$filter['filter_column']]);
            //     }
            // }
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
    public function detail(Request $request, $id){
        $product_details = Product::with(['section', 'brand', 'attributes' => function($query){
            $query->where('status', 1);
        }, 'images'])->find($id)->toArray();
        $section_details = Section::where('id', $product_details['section_id'])->first()->toArray();
        $similar_products = Product::where('section_id', $product_details['section_id'])->where('id', '!=', $id)->limit(4)->inRandomOrder()->get()->toArray();
        if(empty(Session::get('session_id'))){
            $session_id = md5(uniqid(rand(), true)); 
       }else{
           $session_id = Session::get('session_id');
       }
       Session::put('session_id', $session_id);
       //insert product in talbe if not already exists
       $viewed_products_count = DB::table('viewed_products')->where(['product_id'=> $id, 'session_id'=> $session_id])->count();
       if($viewed_products_count ==0){
           DB::table('viewed_products')->insert(['product_id'=> $id, 'session_id'=> $session_id]);
       }
       $viewed_product_id_collection = DB::table('viewed_products')->select('product_id')->where('product_id', '!=', $id)->where('session_id', $session_id)->inRandomOrder()->get()->take(4)->pluck('product_id');
       $viewed_products = Product::whereIn('id', $viewed_product_id_collection)->get()->toArray();
        return view('FlowerShop.front.products.detail', compact('product_details', 'section_details', 'similar_products', 'viewed_products'));
    }
    public function display_price_on_size_selection(Request $request){
        if($request->ajax()){
            $data=$request->all();
            $product_details = Product::select('product_price', 'product_discount')->find($data['product_id']);
            $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'size'=>$data['size'], 'status'=>1])->first()->toArray();
            $attr_stock = $attribute['stock'];
            $attr_image = $attribute['image'];
            $attr_price =  $attribute['price'];
            $attr_sku =  $attribute['sku'];
            if($product_details['product_discount']>0){
                $product_discount= $product_details['product_discount'];
                $attr_discounted_price = $attr_price - ($attr_price*$product_details['product_discount']/100);
                $attr_saving = $attr_price - $attr_discounted_price;
            }
            else{
                $product_discount= "";
                $attr_discounted_price = "";
                $attr_saving = "";
            }
            return response()->json(['view' => (String)View::make('FlowerShop.front.products.attribute_price_2', compact('product_discount','attr_price', 'attr_discounted_price', 'attr_saving')), 'attr_stock'=> $attr_stock, 'attr_sku'=>$attr_sku]);
        }
    }
    public function display_image_on_color_selection(Request $request){
        if($request->ajax()){
            // echo "hello"; die;
            $data=$request->all();
            $product_details = Product::select('id')->find($data['product_id']);
            $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'color'=>$data['color'], 'status'=>1])->first()->toArray();
            $attr_stock = $attribute['stock'];
            $attr_image = $attribute['image'];
            return response()->json(['image'=>$attr_image, 'attr_stock'=>$attr_stock]);
        }
    }
    public function rating_form_handler(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $validator = Validator::make($data, $rules = [
                'review_author' => 'regex:/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i',
                'review_email' => 'email',
            ], $customMessages = [
                // Add Custom Messages here
                'review_author.regex' => ' Tên không hợp lệ',
                'email.email' => ' Email không hợp lệ',
            ])->validate();
            if(!empty($data['review_phone'])) {
                $phone = $data['review_phone'];
            }
            else{
                $phone = "";
            }
            DB::table('rating_infos')->insert(['product_id'=>$data['product_id'], 'name' =>$data['review_author'],'email' =>$data['review_email'],'phone' =>$phone,'rating' =>$data['review_score'],'comment' =>$data['review_content'], 'status'=>1]);
            return redirect()->back()->with('success_message', ' Đã gửi đánh giá!');
        }
        else {
            return redirect()->back()->with('error_message', ' Đã xảy ra lỗi, vui lòng tải lại trang!');
        }
    }
    public function product_comment(Request $request){
        if($request->ajax()){
            $ajax_rating_info = RatingInfo::where('product_id', $request['product_id'])->get()->toArray();
            // return $rating_comment;
            // echo "1";
            return view('FlowerShop.front.products.product_comments', compact('ajax_rating_info'));
        }
    }
    public function cart_add(Request $request) {
        if($request->isMethod('post')){
            $data = $request->all();
            $product_details = Product::find($data['product_id']);
            if($product_details['product_attribute'] == "no"){
                if($data['quantity']< $product_details['product_stock']){
                    
                    if(empty(Session::get('session_id'))){
                        $session_id = md5(uniqid(rand(), true)); 
                   }else{
                       $session_id = Session::get('session_id');
                   }
                   if(Auth::check()){
                        $user_id = Auth::user()->id;
                        $item_count = Cart::where(['product_id'=>$data['product_id'], 'user_id'=> $user_id])->count();
                        if($item_count>0){
                            $item = Cart::where(['product_id'=>$data['product_id'], 'session_id'=> $session_id])->first()->toArray();
                            $new_item_count = $item_count + $data['quantity'];
                            DB::table('carts')->where(['user_id'=> $user_id, 'product_id'=>$data['product_id']])->update(['quantity'=>$new_item_count]);
                            
                        }else{
                            $item = new Cart;
                            $item->session_id = $session_id;
                            $item->user_id = $user_id;
                            $item->product_id = $data['product_id'];
                            $item->size = '';
                            $item->color = '';
                            $item->price =   $data['price'];
                            $item->quantity = $data['quantity'];
                            $item->sub_total = $data['quantity']*$data['price'];
                            $item->save();
                            return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                        }
                   }else{
                        $user_id = 0;
                        $item_count = Cart::where(['product_id'=>$data['product_id'], 'session_id'=> $session_id])->count();
                        if($item_count>0){
                            $item = Cart::where(['product_id'=>$data['product_id'], 'session_id'=> $session_id])->first()->toArray();
                            $new_item_count = $item['quantity'] + $data['quantity'];
                            if( $new_item_count>$product_details['product_stock']) {
                                return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                            }else{
                                $new_sub_total = $new_item_count * $data['price'];
                                DB::table('carts')->where(['session_id'=> $session_id, 'product_id'=>$data['product_id']])->update(['quantity'=>$new_item_count, 'sub_total'=>$new_sub_total]);
                                return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                            }
                        }else{
                            $item = new Cart;
                            $item->session_id = $session_id;
                            $item->user_id = 0;
                            $item->product_id = $data['product_id'];
                            $item->size = '';
                            $item->color = '';
                            $item->price =   $data['price'];
                            $item->quantity = $data['quantity'];
                            $item->sub_total = $data['quantity']*$data['price'];
                            $item->save();
                            return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                        }
                   }
                }else{
                    return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                }
            }else if ($product_details['product_attribute'] == "yes"){
                if(isset($data['attr_sku']) && !empty($data['attr_sku'])){
                    $attr_sku = $data['attr_sku'];
                    $attr = ProductAttribute::where('sku', $attr_sku)->first()->toArray();
                    $attr_stock = $attr['stock'];  
                }else{
                    return redirect()->back()->with('error_message', ' Đã xảy ra lỗi. Vui lòng thử lại!');
                }
                if($data['quantity']<  $attr_stock){
                    if(empty(Session::get('session_id'))){
                        $session_id = md5(uniqid(rand(), true)); 
                   }else{
                       $session_id = Session::get('session_id');
                   }
                   if(Auth::check()){
                    $user_id = Auth::user()->id;
                    $item_count = Cart::where(['attr_sku'=>$data['product_id'], 'user_id'=> $user_id])->count();
                    if($item_count>0){
                        $new_item_count = $item_count + $data['quantity'];
                        if($new_item_count< $attr_stock) {
                            DB::table('carts')->where(['attr_sku'=> $attr_sku, 'session_id'=>$session_id])->update(['quantity'=>$new_item_count]);
                        }else{

                        }
                    }else{
                        $item = new Cart;
                        $item->session_id = $session_id;
                        $item->user_id = $user_id;
                        $item->product_id = $data['product_id'];
                        $item->size = '';
                        $item->color = '';
                        $item->price =   $data['price'];
                        $item->quantity = $data['quantity'];
                        $item->sub_total = $data['quantity']*$data['price'];
                        $item->save();
                        return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                    }
                   }else{
                    $user_id = 0;
                    $item_count = Cart::where(['attr_sku'=>$data['attr_sku'], 'session_id'=> $session_id])->count();
                    if($item_count>0){
                        $item = Cart::where(['attr_sku'=>$data['attr_sku'], 'session_id'=> $session_id])->first()->toArray();
                        $new_item_count = $item['quantity'] + $data['quantity'];
                        if($new_item_count < $attr_stock) {
                            $new_sub_total = $new_item_count *$data['price'];
                            DB::table('carts')->where(['session_id'=> $session_id, 'attr_sku'=>$attr_sku])->update(['quantity'=>$new_item_count, 'sub_total'=>$new_sub_total]);
                            return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                        }else{
                            return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                        }
                    }else{
                        $item = new Cart;
                        $item->session_id = $session_id;
                        $item->user_id = 0;
                        $item->product_id = $data['product_id'];
                        $item->attr_id = $attr['id'];
                        $item->attr_sku = $attr_sku;
                        $item->size = $attr['size'];
                        $item->color = $attr['color'];
                        $item->price =   $data['price'];
                        $item->quantity = $data['quantity'];
                        $item->sub_total = $data['quantity']*$data['price'];
                        $item->save();
                        return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                    }
                   }
                }else{
                    return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                }
            }
        }
    }
    public function cart(){
        $items = Cart::get_items();
        // dd($items);
        $total_price = Cart::get_total_price();
        return view('FlowerShop.front.products.cart', compact('items', 'total_price'));
    }
    public function cart_delete(Request $request){
        if($request->ajax()){
            $data = $request->all();
            Cart::find($data['cart_item_id'])->delete();
            $items = Cart::get_items();
            return response()->json(['view'=>(String)View::make('FlowerShop.front.products.cart_table_container', compact('items'))]);
        }
    }
}
