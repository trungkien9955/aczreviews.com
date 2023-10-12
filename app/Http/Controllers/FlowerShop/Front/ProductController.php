<?php

namespace App\Http\Controllers\FlowerShop\Front;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
use App\Models\FlowerShop\Cart;
use App\Models\FlowerShop\CouponCart;
use App\Models\FlowerShop\DeliveryAddress;
use App\Models\FlowerShop\Province;
use App\Models\FlowerShop\District;
use App\Models\FlowerShop\Ward;
use App\Models\FlowerShop\Coupon;
use App\Models\FlowerShop\Order;
use App\Models\FlowerShop\OrderProduct;
use Route;
use DB;
use Validator;
use Session;
use Auth;
use Carbon\Carbon;
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
    public function home_size_listing($section, $size){
        $size_details = $size;
        $section_details = Section::where('url', $section)->first()->toArray();
        $home_size_products = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['section_id'=> $section_details['id'], 'status'=> 1])->get()->toArray();
        return view('FlowerShop.front.products.home_size_listing', compact('home_size_products', 'section_details', 'size_details'));
    }
    public function get_featured_products(){
        $featured_products = Product::with('gifts')->select('id', 'product_name', 'product_image', 'product_code', 'product_price', 'product_discount', 'is_featured')->where(['is_featured'=> "Yes", 'status'=> 1])->get()->toArray();
        return view('FlowerShop.front.products.featured_products', compact('featured_products'));
    }
    public function search(Request $request){
        if($request->isMethod("get")){
            $data = $request->all();
            $query = $data['search'];
            $count =  Product::where('product_name', 'like', '%'.$query.'%')->count();
            if($count==0){
                $count==0;
                return view('FlowerShop.front.products.search', compact( 'count'));
            }else{
                $products =  Product::where('product_name', 'like', '%'.$query.'%')->get()->toArray();
                return view('FlowerShop.front.products.search', compact('products', 'count'));

            }
        }
    }
    public function detail(Request $request, $id){
        $product_details = Product::with(['section', 'brand', 'attributes' => function($query){
            $query->where('status', 1);
        }, 'images', 'gifts', 'offers'])->find($id)->toArray();
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
    public function display_on_size_selection(Request $request){
        if($request->ajax()){
            $data=$request->all();
            if(empty($data['color'])){
                $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'size'=>$data['size'], 'status'=>1])->first()->toArray();
            }else{
                $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'size'=>$data['size'], 'v_color'=>$data['color'],'status'=>1])->first()->toArray();
            }
            // return print_r($attribute);
            $product_details = Product::select('product_price', 'product_discount')->find($data['product_id']);
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
    public function display_on_color_selection(Request $request){
        if($request->ajax()){
            // echo "hello"; die;
            $data=$request->all();
            if(empty($data['size'])){
                $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'color'=>$data['color'], 'status'=>1])->first()->toArray();
            }else{
                $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'size'=>$data['size'], 'v_color'=>$data['color'],'status'=>1])->first()->toArray();
            }
            $product_details = Product::select('id','product_price', 'product_discount')->find($data['product_id']);
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
            return response()->json(['view' => (String)View::make('FlowerShop.front.products.attribute_price_2', compact('product_discount','attr_price', 'attr_discounted_price', 'attr_saving')), 'attr_stock'=> $attr_stock, 'attr_sku'=>$attr_sku, 'image'=>$attr_image]);
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
            if($data['buy']== 'not_yet') {
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
                            $item_count = Cart::where(['product_id'=>$data['product_id'], 'user_id'=> $user_id, 'session_id'=> $session_id])->count();
                            if($item_count>0){
                                $item = Cart::where(['product_id'=>$data['product_id'],'user_id'=> $user_id, 'session_id'=> $session_id])->first()->toArray();
                                $new_item_quantity = $item['quantity'] + $data['quantity'];
                                // dd($data['quantity']);
                                DB::table('carts')->where(['product_id'=>$data['product_id'],'user_id'=> $user_id,  'session_id'=> $session_id])->update(['quantity'=>$new_item_quantity]);   
                                return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                            }else{
                                $item = new Cart;
                                $item->session_id = $session_id;
                                $item->user_id = $user_id;
                                $item->section_id = $product_details['section_id'];
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
                                $new_item_quantity = $item['quantity'] + $data['quantity'];
                                if( $new_item_quantity>$product_details['product_stock']) {
                                    return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                                }else{
                                    $new_sub_total = $new_item_quantity * $data['price'];
                                    DB::table('carts')->where(['session_id'=> $session_id, 'product_id'=>$data['product_id']])->update(['quantity'=>$new_item_quantity, 'sub_total'=>$new_sub_total]);
                                    return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                                }
                            }else{
                                $item = new Cart;
                                $item->session_id = $session_id;
                                $item->user_id = 0;
                                $item->section_id = $product_details['section_id'];
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
                        $attr_size = $attr['size'];  
                        $attr_color = $attr['v_color'];  
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
                        $item_count = Cart::where(['attr_sku'=>$attr_sku, 'user_id'=> $user_id, 'session_id'=> $session_id])->count();
                        if($item_count>0){
                            $item = Cart::where(['attr_sku'=>$attr_sku, 'user_id'=> $user_id, 'session_id'=> $session_id])->first()->toArray();
                            $new_item_quantity = $item['quantity'] + $data['quantity'];
                            if($new_item_quantity< $attr_stock) {
                                DB::table('carts')->where(['attr_sku'=> $attr_sku, 'user_id'=>$user_id,  'session_id'=> $session_id])->update(['quantity'=>$new_item_quantity]);
                                return redirect()->back()->with('success_message', ' Đã thêm vào giỏ hàng!');
                            }else{
                                return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                            }
                        }else{
                            $item = new Cart;
                            $item->session_id = $session_id;
                            $item->user_id = $user_id;
                            $item->section_id = $product_details['section_id'];
                            $item->product_id = $data['product_id'];
                            $item->attr_id = $attr['id'];
                            $item->attr_sku = $attr_sku;
                            $item->image = $data['product_img_src'];
                            $item->size = $attr_size;
                            $item->color = $attr_color;
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
                            $item->section_id = $product_details['section_id'];
                            $item->product_id = $data['product_id'];
                            $item->attr_id = $attr['id'];
                            $item->attr_sku = $attr_sku;
                            // return print_r($data['product_img_src']);
                            $item->image = $data['product_img_src'];
                            $item->size = $attr['size'];
                            $item->color = $attr['v_color'];
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
            }else if($data['buy']== 'yes'){
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
                            $item_count = Cart::where(['product_id'=>$data['product_id'], 'user_id'=> $user_id, 'session_id'=> $session_id])->count();
                            if($item_count>0){
                                $item = Cart::where(['product_id'=>$data['product_id'],'user_id'=> $user_id, 'session_id'=> $session_id])->first()->toArray();
                                $new_item_quantity = $item['quantity'] + $data['quantity'];
                                // dd($data['quantity']);
                                DB::table('carts')->where(['product_id'=>$data['product_id'],'user_id'=> $user_id,  'session_id'=> $session_id])->update(['quantity'=>$new_item_quantity]);   
                                return redirect('/cart');
                            }else{
                                $item = new Cart;
                                $item->session_id = $session_id;
                                $item->user_id = $user_id;
                                $item->section_id = $product_details['section_id'];
                                $item->product_id = $data['product_id'];
                                $item->size = '';
                                $item->color = '';
                                $item->price =   $data['price'];
                                $item->quantity = $data['quantity'];
                                $item->sub_total = $data['quantity']*$data['price'];
                                $item->save();
                                return redirect('/cart');
                            }
                       }else{
                            $user_id = 0;
                            $item_count = Cart::where(['product_id'=>$data['product_id'], 'session_id'=> $session_id])->count();
                            if($item_count>0){
                                $item = Cart::where(['product_id'=>$data['product_id'], 'session_id'=> $session_id])->first()->toArray();
                                $new_item_quantity = $item['quantity'] + $data['quantity'];
                                if( $new_item_quantity>$product_details['product_stock']) {
                                    return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                                }else{
                                    $new_sub_total = $new_item_quantity * $data['price'];
                                    DB::table('carts')->where(['session_id'=> $session_id, 'product_id'=>$data['product_id']])->update(['quantity'=>$new_item_quantity, 'sub_total'=>$new_sub_total]);
                                    return redirect('/cart');
                                }
                            }else{
                                $item = new Cart;
                                $item->session_id = $session_id;
                                $item->user_id = 0;
                                $item->section_id = $product_details['section_id'];
                                $item->product_id = $data['product_id'];
                                $item->size = '';
                                $item->color = '';
                                $item->price =   $data['price'];
                                $item->quantity = $data['quantity'];
                                $item->sub_total = $data['quantity']*$data['price'];
                                $item->save();
                                return redirect('/cart');
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
                        $attr_size = $attr['size'];  
                        $attr_color = $attr['v_color'];  
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
                        $item_count = Cart::where(['attr_sku'=>$attr_sku, 'user_id'=> $user_id, 'session_id'=> $session_id])->count();
                        if($item_count>0){
                            $item = Cart::where(['attr_sku'=>$attr_sku, 'user_id'=> $user_id, 'session_id'=> $session_id])->first()->toArray();
                            $new_item_quantity = $item['quantity'] + $data['quantity'];
                            if($new_item_quantity< $attr_stock) {
                                DB::table('carts')->where(['attr_sku'=> $attr_sku, 'user_id'=>$user_id,  'session_id'=> $session_id])->update(['quantity'=>$new_item_quantity]);
                                return redirect('/cart');
                            }else{
                                return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                            }
                        }else{
                            $item = new Cart;
                            $item->session_id = $session_id;
                            $item->user_id = $user_id;
                            $item->section_id = $product_details['section_id'];
                            $item->product_id = $data['product_id'];
                            $item->attr_id = $attr['id'];
                            $item->attr_sku = $attr_sku;
                            $item->image = $data['product_img_src'];
                            $item->size = $attr_size;
                            $item->color = $attr_color;
                            $item->price =   $data['price'];
                            $item->quantity = $data['quantity'];
                            $item->sub_total = $data['quantity']*$data['price'];
                            $item->save();
                            return redirect('/cart');
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
                                return redirect('/cart');
                            }else{
                                return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                            }
                        }else{
                            $item = new Cart;
                            $item->session_id = $session_id;
                            $item->user_id = 0;
                            $item->section_id = $product_details['section_id'];
                            $item->product_id = $data['product_id'];
                            $item->attr_id = $attr['id'];
                            $item->attr_sku = $attr_sku;
                            // return print_r($data['product_img_src']);
                            $item->image = $data['product_img_src'];
                            $item->size = $attr['size'];
                            $item->color = $attr['v_color'];
                            $item->price =   $data['price'];
                            $item->quantity = $data['quantity'];
                            $item->sub_total = $data['quantity']*$data['price'];
                            $item->save();
                            return redirect('/cart');
                        }
                       }
                    }else{
                        return redirect()->back()->with('error_message', ' Không đủ hàng trong kho!');
                    }
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
    public function cart_quantity_minus(Request $request){
        if($request->ajax()){
            $cart = Cart::find($request['cart_item_id']);
            $sub_total = $request['new_quantity']*$cart['price'];
            Cart::where('id', $request['cart_item_id'])->update(['quantity'=>$request['new_quantity'], 'sub_total' => $sub_total]);
            $items = Cart::get_items();
            $total_price = Cart::get_total_price();
            return response()->json(['status'=>'true',  'view'=> (String)View::make('FlowerShop.front.products.cart_table_container',compact('items', 'total_price'))]);
        }
    }
    public function cart_quantity_plus(Request $request){
        if($request->ajax()){
            $cart = Cart::find($request['cart_item_id']);
            if(is_null($cart['attr_id'])){
                $product_details = Product::select('product_stock')->where('id', $cart['product_id'])->first();
                if($request['new_quantity']> $product_details['product_stock']){
                    return response()->json(['case'=>'failed_stock',  'error_message' => ' Không đủ hàng trong kho!']);
                }else{
                    $sub_total = $request['new_quantity']*$cart['price'];
                    Cart::where('id', $request['cart_item_id'])->update(['quantity'=>$request['new_quantity'], 'sub_total' => $sub_total]);
                    $items = Cart::get_items();
                    $total_price = Cart::get_total_price();
                    return response()->json(['case'=>'product',  'view'=> (String)View::make('FlowerShop.front.products.cart_table_container',compact('items', 'total_price'))]);
                }
            }else{
                $attr_details = ProductAttribute::select('price', 'stock')->where('id', $cart['attr_id'])->first();
                if($request['new_quantity']> $attr_details['stock']){
                    return response()->json(['case'=>'failed_stock',  'error_message' => ' Không đủ hàng trong kho!']);
                }else{
                    $sub_total = $request['new_quantity']*$cart['price'];
                    Cart::where('id', $request['cart_item_id'])->update(['quantity'=>$request['new_quantity'], 'sub_total' => $sub_total]);
                    $items = Cart::get_items();
                    $total_price = Cart::get_total_price();
                    return response()->json(['case'=>'attr',  'view'=> (String)View::make('FlowerShop.front.products.cart_table_container',compact('items', 'total_price'))]);
                }
            }
        }
    }
    public function cart_quantity_change(Request $request){
        if($request->ajax()){
            $cart = Cart::find($request['cart_item_id']);
            if(is_null($cart['attr_id'])){
                $product_details = Product::select('product_stock')->where('id', $cart['product_id'])->first();
                if($request['new_quantity']> $product_details['product_stock']){
                    return response()->json(['case'=>'failed_stock',  'error_message' => ' Không đủ hàng trong kho!']);
                }else{
                    $sub_total = $request['new_quantity']*$cart['price'];
                    Cart::where('id', $request['cart_item_id'])->update(['quantity'=>$request['new_quantity'], 'sub_total' => $sub_total]);
                    $items = Cart::get_items();
                    $total_price = Cart::get_total_price();
                    return response()->json(['case'=>'product',  'view'=> (String)View::make('FlowerShop.front.products.cart_table_container',compact('items', 'total_price'))]);
                }
            }else{
                $attr_details = ProductAttribute::select('price', 'stock')->where('id', $cart['attr_id'])->first();
                if($request['new_quantity']> $attr_details['stock']){
                    return response()->json(['case'=>'failed_stock',  'error_message' => ' Không đủ hàng trong kho!']);
                }else{
                    $sub_total = $request['new_quantity']*$cart['price'];
                    Cart::where('id', $request['cart_item_id'])->update(['quantity'=>$request['new_quantity'], 'sub_total' => $sub_total]);
                    $items = Cart::get_items();
                    $total_price = Cart::get_total_price();
                    return response()->json(['case'=>'attr',  'view'=> (String)View::make('FlowerShop.front.products.cart_table_container',compact('items', 'total_price'))]);
                }
            }
        }
    }
    public function check_coupon(Request $request){
        if($request->ajax()){
            $coupon_code =  $request['coupon_code'];
            $coupon_count = Coupon::where('coupon_code', $coupon_code)->count();
            if($coupon_count ==0) {
                return response()->json(['case'=>'invalid', 'error_message' => ' Mã giảm giá không hợp lệ!']);
            }else{
                $coupon = Coupon::where('coupon_code', $coupon_code)->first()->toArray();
                $validty = $coupon['validity'];
                if($validty == "used"){
                    return response()->json(['case'=>'used', 'error_message' => ' Mã giảm giá đã được sử dụng!']);
                }else{
                    $current_date = Carbon::now();
                    $current_date_formatted = $current_date->format('Y-m-d');
                    if($current_date_formatted > $coupon['expiry_date']) {
                        return response()->json(['case'=>'expired', 'error_message' => ' Mã giảm giá đã hết hạn!']);
                    }else{
                        if($coupon['amount_type'] == "fixed"){
                            // return response()->json(['case'=>'valid','type'=>'fixed','total_price'=>1111,'success_message' => ' Thành công: Đã áp dụng mã giảm giá']); die;
                            $total_price = Cart::get_total_price();
                            $total_price = $total_price - $coupon['amount'];
                            $total_price = number_format($total_price);
                            return response()->json(['case'=>'valid','type'=>'fixed','total_price'=> $total_price,'success_message' => ' Đã áp dụng mã giảm giá']);
                        }else if($coupon['amount_type'] == "Percentage"){
                            $total_price = Cart::get_total_price();
                            $section_id_collection = explode(',',$coupon['sections']);
                            $items = Cart::get_items();
                            // return response()->json(['case'=>'valid','type' => 'Percentage', 'success_message' => ' Thành công: Đã áp dụng mã giảm giá','items'=>$items]); 
                            foreach($items as $item){
                                if(in_array($item['section_id'], $section_id_collection)){
                                    $new_price = $item['price']-($item['price']*$coupon['amount']/100);
                                    $difference = $item['price'] - $new_price;
                                    Cart::where('id', $item['id'])->update(['price'=> $new_price, 'sub_total' => $item['sub_total']- $difference]);
                                }
                            }
                            $items = Cart::get_items();
                            $total_price = Cart::get_total_price();
                            $session_id = Session::get('session_id');
                            if(!empty(Auth::user()->id)){
                                $user_id = Auth::user()->id;
                            }else{
                                $user_id = 0;
                            }
                            Coupon::where('coupon_code', $coupon_code)->update(['validity'=>'used', 'session_id'=>$session_id, 'user_id'=>$user_id]);
                            return response()->json(['case'=>'valid','type' => 'Percentage', 'success_message' => ' Thành công: Đã áp dụng mã giảm giá','view'=>(String)View::make('FlowerShop.front.products.cart_table_container', compact('items', 'total_price'))]); 
                        }
                        
                    }
                }
            }
        }
    }
    public function checkout(){

            $provinces = Province::orderBy('name', 'Asc')->get()->toArray();
            $districts = District::get()->toArray();
            $wards = Ward::get()->toArray();
            $total_price = Cart::get_total_price();
            $items = Cart::get_items();
            return view('FlowerShop.front.products.checkout', compact('items', 'total_price', 'provinces', 'districts', 'wards'));
        
    }
    public function get_districts_after_province(Request $request){
        if($request->ajax()){
            // echo 'hello';
            $province_id = $request['province_id'];
            // echo $province_id; die;
            $districts = District::where('province_id', $province_id)->get()->toArray();
            // $districts_json = json_encode($districts);
            return $districts;
        }
    }
    public function get_wards_after_district(Request $request){
        if($request->ajax()){
            // echo 'hello';
            $district_id = $request['district_id'];
            // echo $province_id; die;
            $wards = Ward::where('district_id', $district_id)->get()->toArray();
            // $districts_json = json_encode($districts);
            return $wards;
        }
    }
    public function place_order(Request $request){
        $data=$request->all();
        if(!empty(Auth::user()->id)){
            $user_id = Auth::user()->id;
            $session_id = Session::get('session_id');
        }else{
            $user_id = 0;
            $session_id = Session::get('session_id');
        }
        $province = Province::find($data['province_id']);
        $district = District::find($data['district_id']);
        $ward = Ward::find($data['ward_id']);
        $shipping_charges =  $province['shipping_charges'];
        if(!empty(Auth::user()->id)){
            $coupon_count = Coupon::where(['session_id'=> Session::get('session_id'), 'user_id'=>Auth::user()->id])->count();
            if($coupon_count >0){
            $coupon = Coupon::where(['session_id'=> Session::get('session_id'), 'user_id'=>Auth::user()->id])->first();
            $coupon_code = $coupon['coupon_code'];
            $coupon_amount = $coupon['amount'];

            }else{
                $coupon_code = '';
                $coupon_amount = 0;

            }
        }else{
            $coupon_count = Coupon::where('session_id', Session::get('session_id'))->count();
            if($coupon_count >0){
                $coupon = Coupon::where(['session_id'=> Session::get('session_id')])->first();
                $coupon_code = $coupon['coupon_code'];
                $coupon_amount = $coupon['amount'];
                }else{
                    $coupon_code = '';
                    $coupon_amount = 0;
                }
        }
        $order = new Order;
        $order->order_code = 'FS'.substr($data['mobile'], -3).rand(111,999);
        $order->user_id =  $user_id;
        $order->session_id =  $session_id;
        $order->name =  $data['name'];
        $order->address =  $data['address'];
        $order->ward =  $ward['name'];
        $order->district =   $district['name'];
        $order->province =  $province['name'];
        $order->mobile =  $data['mobile'];
        $order->email =  $data['email'];
        $order->shipping_charges =  $shipping_charges;
        $order->coupon_code =    $coupon_code;
        $order->coupon_amount =  $coupon_amount;
        $order->order_status =  'confirming';
        $order->payment_method =  $data['payment_method'];
        $order->total_price =  $data['total_price']+$shipping_charges;
        $order->save();
        //email details
        if(!empty(Auth::user()->id)){
            $order_details = Order::where(['session_id'=> Session::get('session_id'), 'user_id'=>Auth::user()->id])->first();
        }else{
            $order_details = Order::where('session_id', Session::get('session_id'))->first();
        }
        $total_price = $order_details['total_price'];
        $items = Cart::get_items();
        $items_count = 0;
        foreach( $items as $item){
            $count = $item['quantity'];
            $items_count = $items_count + $count;
        }
        $order_code = $order_details['order_code'];
        if( $order_details['order_status'] == "confirming"){
            $status = "Đang chờ xác nhận";
        }else if($order_details['order_status'] == "shipping"){
            $status = "Đang giao hàng";
        }else if($order_details['order_status'] == "completed"){
            $status = "Hoàn thành";
        }
        if( $order_details['payment_method'] == "cod"){
            $payment_method = "Thanh toán khi nhận hàng";
        }else if($order_details['payment_method'] == "transfer"){
            $payment_method = "Chuyển khoản ngân hàng";
        }
        $email = $data['email'];
        $message_data = ['name'=>$data['name'], 'order_details'=>$order_details, 'items'=>$items, 'order_code'=>$order_code, 'items_count'=>$items_count, 'total_price'=>$total_price, 'status'=>$status, 'payment_method'=>$payment_method];
        Mail::send('FlowerShop.front.emails.order_email', $message_data, function($message)use($email){
            $message->to($email)->subject('Thông tin đơn đặt hàng');
        });
        foreach($items as $item){
            $order_product = new OrderProduct;
            $order_product->order_id = $order_details['id'];
            $order_product->session_id = $order_details['session_id'];
            $order_product->user_id = $order_details['user_id'];
            $order_product->product_id = $item['product_id'];
            $order_product->product_code = $item['product']['product_code'];
            $order_product->attr_id = $item['attr_id'];
            $order_product->product_name = $item['product']['product_name'];
            $order_product->product_size = $item['size'];
            $order_product->product_color = $item['color'];
            $order_product->product_price = $item['price'];
            $order_product->product_quantity = $item['quantity'];
            $order_product->sub_total = $item['sub_total'];
            $order_product->save();
            Cart::find($item['id'])->delete();
            Session::forget('session_id');
        }
        return redirect()->back()->with('success_message', ' Đặt hàng thành công, vui lòng chờ shop liên hệ xác nhận đơn hàng! Xem chi tiết <a href="/order-details/'.$order_details['id'].'" style = "color: #0000FF; text-decoration:underline;">Tại đây</a> hoặc kiểm tra email của bạn!');
    }
    public function order_details($id){
        $order_details = Order::find($id);
        $total_price = $order_details['total_price'];
        $items = Order::get_order_products($order_details['id']);
        $items_count = 0;
        foreach( $items as $item){
            $count = $item['product_quantity'];
            $items_count = $items_count + $count;
        }
        $order_code = $order_details['order_code'];
        if( $order_details['order_status'] == "confirming"){
            $status = "Đang chờ xác nhận";
        }else if($order_details['order_status'] == "shipping"){
            $status = "Đang giao hàng";
        }else if($order_details['order_status'] == "completed"){
            $status = "Hoàn thành";
        }
        if( $order_details['payment_method'] == "cod"){
            $payment_method = "Thanh toán khi nhận hàng";
        }else if($order_details['payment_method'] == "transfer"){
            $payment_method = "Chuyển khoản ngân hàng";
        }
        return view('FlowerShop.front.products.order_details', compact('order_details','items','order_code', 'items_count', 'total_price', 'status', 'payment_method'));
    }
}
