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
        if($id==""){
            $title = "Thêm coupon";
            $coupon = new Coupon;
            $section_id_collection = array();
            $user_id_collection = array();
            $message = "Đã thêm coupon!";
        }else {
            $title = "Chỉnh sửa coupon";
            $coupon = Coupon::find($id)->toArray();
            // dd($coupon);
            $section_id_collection = explode(',', $coupon['sections']);
            $user_id_collection = explode(',', $coupon['users']);
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
            $coupon->coupon_option= $data['coupon_option'];
            $coupon->coupon_code= $coupon_code;
            $coupon->sections= $section_id_collection;
            $coupon->users= $user_id_collection;
            $coupon->coupon_type= $data['coupon_type'];
            $coupon->amount_type= $data['amount_type'];
            $coupon->amount= $data['amount'];
            $coupon->expiry_date= $data['expiry_date'];
            $coupon->status = 1;
            $coupon->save();
            return redirect()->back()->with('success_message', $message);
            return redirect('admin/coupons');
        }
        $sections = Section::select('id', 'section_name')->get()->toArray();
        $admins = Admin::select('id', 'email', 'name')->get()->toArray();

        return view('FlowerShop.admin.coupons.add_edit_coupons', compact('title', 'coupon', 'sections', 'admins', 'section_id_collection', 'user_id_collection'));
    }
}
