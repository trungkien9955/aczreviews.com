<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\FlowerShop\Rating;
use App\Models\FlowerShop\RatingInfo;
class RatingController extends Controller
{
    public function add_rating(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = Auth::user()->id;
            //check existing rating
           $rating_count =  Rating::where(['user_id'=>$user_id, 'product_id'=>$data['product_id']])->count();
            if($rating_count>0){
                return redirect()->back()->with('rating_error_message', ' Bạn đã đánh giá sản phẩm này rồi!');
            }else{
                $rating = new Rating;
                $rating->user_id = $user_id;
                $rating->product_id = $data['product_id'];
                $rating->review = $data['review'];
                $rating->rating = $data['rating'];
                $rating->status = 1;
                $rating->save();
                return redirect()->back()->with('rating_success_message', ' Cảm ơn bạn đã đánh giá sản phẩm!');
            }
        }
    }
    public function user_rating(Request $request){
        if($request->ajax()){
            // echo "hello"; die;
            $data = $request->all();
            $rating_count =  Rating::where(['user_id'=>$data['user_id'], 'product_id'=>$data['product_id']])->count();
            if($rating_count>0){
                return response()->json(['case'=>'error', 'user_rating_error_message'=> ' Bạn đã đánh giá sản phẩm này rồi!']);
            }else{
                $rating = new Rating;
                $rating->user_id = $data['user_id'];
                $rating->product_id = $data['product_id'];
                $rating->review = $data['review'];
                $rating->rating = $data['rating'];
                $rating->status = 1;
                $rating->save();
                return response()->json(['case'=>'success', 'user_rating_success_message'=> ' Cảm ơn bạn đã đánh giá sản phẩm!']);
            }
        }
    }
    public function guest_rating(Request $request){
        if($request->ajax()){
            // echo "hello"; die;
            $data = $request->all();
            $rating_count =  RatingInfo::where(['email'=>$data['email'], 'product_id'=>$data['product_id']])->count();
            if($rating_count>0){
                return response()->json(['case'=>'error', 'guest_rating_error_message'=> ' Bạn đã đánh giá sản phẩm này rồi!']);
            }else{
                $rating_info = new RatingInfo;
                $rating_info->product_id = $data['product_id'];
                $rating_info->name = $data['name'];
                $rating_info->email = $data['email'];
                $rating_info->phone = $data['phone'];
                $rating_info->rating = $data['rating'];
                $rating_info->comment = $data['comment'];
                $rating_info->status = 1;
                $rating_info->save();
                return response()->json(['case'=>'success', 'guest_rating_success_message'=> ' Cảm ơn bạn đã đánh giá sản phẩm!']);
            }
        }
    }
}
