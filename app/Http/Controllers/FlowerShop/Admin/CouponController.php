<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Coupon;
use App\Models\FlowerShop\Section;
use App\Models\FlowerShop\Admin\Admin;
use Session;
class CouponController extends Controller
{
    public function coupons(){
        Session::put('page', 'coupons');
        $coupons = Coupon::get()->toArray();
        return view('FlowerShop.admin.coupons.coupons', compact('coupons'));
    }
    public function add_edit_coupons(Request $request, $id = null){
        if($id=""){
            $title = "Thêm coupon";
            $coupon = new Coupon;
            $message = "Đã thêm coupon!";
        }else {
            $title = "Chỉnh sửa coupon";
            $coupon = Coupon::find($id);
            $message = "Đã chỉnh sửa coupon!";
        }
        if($request->isMethod('post')){
            $data= $request->all();
            $section_id_collection = implode(',',$data['section_id']);
            $user_id_collection = implode(',',$data['admin_id']);
            if($data['coupon_option'] = "Automatic"){
                $coupon_code = str_random(8);
            }else{
                $coupon_code = $data['coupon_code'];
            }
        }
        $sections = Section::select('id', 'section_name')->get()->toArray();
        $admins = Admin::select('id', 'email', 'name')->get()->toArray();

        return view('FlowerShop.admin.coupons.add_edit_coupons', compact('title', 'coupon', 'sections', 'admins'));
    }
}
