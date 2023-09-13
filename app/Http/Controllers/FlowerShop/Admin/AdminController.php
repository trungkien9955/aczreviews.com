<?php

namespace App\Http\Controllers\FlowerShop\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
        // echo $password = Hash::make('123457'); die;

        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $validator = Validator::make($data, $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ], $customMessages = [
                // Add Custom Messages here
                'email.required' => 'Email is required!',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
            ])->validate();
            
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
                return redirect('/admin/dashboard');
            }else{
                return redirect()->back()->with('error_message','Invalid Email or Password');
            }

            // if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
            //     if(Auth::guard('admin')->user()->type=="vendor" && Auth::guard('admin')->user()->confirm=="No" ){
            //         return redirect()->back()->with('error_message', 'Please confirm your email to activate your Vendor Account');
            //     } else if(Auth::guard('admin')->user()->type!="vendor" && Auth::guard('admin')->user()->status=="0" ){
            //         return redirect()->back()->with('error_message', 'Your admin account is not activated');
            //     return redirect('admin/dashboard');
            //     }else{
            //         return redirect('admin/dashboard');
            //     }
            // }else{
            //     return redirect()->back()->with('error_message','Invalid Email or Password');
            // }
        }
        return view('FlowerShop.admin.login');
    }
    function dashboard() {
        Session::put('page', 'dashboard');
        return view('FlowerShop.admin.dashboard');
    }
}
