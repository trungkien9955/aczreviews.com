<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
use Route;
use DB;
use Validator;
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

        return view('FlowerShop.front.products.detail', compact('product_details', 'section_details'));
    }
    public function display_price_on_size_selection(Request $request){
        if($request->ajax()){
            $data=$request->all();
            $product_details = Product::select('product_price', 'product_discount')->find($data['product_id']);
            $attribute = ProductAttribute::where(['product_id'=> $data['product_id'], 'size'=>$data['size'], 'status'=>1])->first()->toArray();
            $attr_stock = $attribute['stock'];
            $attr_image = $attribute['image'];
            $attr_price =  $attribute['price'];
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
            return response()->json(['view' => (String)View::make('FlowerShop.front.products.attribute_price_2', compact('product_discount','attr_price', 'attr_discounted_price', 'attr_saving')), 'attr_stock'=> $attr_stock]);
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
            $rating_comment = RatingInfo::where('product_id', $request['product_id'])->paginate(5);
            return view('FlowerShop.front.products.product_comments', compact('rating_comment'));
        }
    }
}
