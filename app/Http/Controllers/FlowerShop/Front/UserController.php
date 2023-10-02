<?php

namespace App\Http\Controllers\FlowerShop\Front;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Validator;
use App\Models\FlowerShop\User;
use App\Models\FlowerShop\Cart;
use Session;
class UserController extends Controller
{
    public function login_register(){
        return view('FlowerShop.front.users.login_register');
    }
    public function user_register(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // $data= json_decode($request, true);
            // echo "<pre>"; print_r($data); die;
            // print_r($data['mobile']); die;
            $password = Hash::make($data['password']);
            // print_r($password); die;
            $user = new User;
            $user->name = $data["name"];
            $user->email = $data['email'];
            $user->mobile = $data['mobile'];
            $user->password = $password;
            $user->status =0;
            $user->save();
            //active user account after user confirms by email
            $email = $data['email'];
            $message_data = ['name'=>$data['name'],'email'=>$data['email'], 'code'=> base64_encode($data['email'])];
            Mail::send('FlowerShop.front.emails.user_confirmation', $message_data, function($message)use($email){
                $message->to($email)->subject('Xác nhận tài khoản FlowerShop');
            });
            $redirect = url('/user/login-register');
            return response()->json(['type'=>'success','url'=>$redirect, 'message'=>'Thành công: Vui lòng xác nhận đăng ký tài khoản qua email!']);
            //activate user account immediately
            // $email = $data['email'];
            // $message_data = ['name'=>$data['name'],'mobile'=>$data['mobile'],'email'=>$data['email']];
            // Mail::send('FlowerShop.front.emails.register', $message_data, function($message)use($email){
            //     $message->to($email)->subject('Chào mừng bạn đến với FlowerShop');
            // });
            // if(Auth::attempt(['email'=>$data['email'],'password' => $data['password']])){
            //     $redirect = url('cart');
            //     return response()->json(['url'=>$redirect]);
            // }
        }
    }
    public function user_login(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $validator = Validator::make($data, $rules = [
                'email'=>'required|email|exists:users',
                'password'=> 'required', 
                'accept'=>'required'
            ], [
                'email.required' => "Vui lòng nhập email!",
                'email.email' => "Email không hợp lệ!",
                'email.exists:users' => "Email đã tồn tại!",
                'password.required'=> 'Vui lòng nhập mật khẩu!', 
                'accept.required' => 'Bạn cần đồng ý với điều khoản của chúng tôi để tiếp tục!'
            ]);
            if($validator->passes()){
                if(Auth::attempt(['email'=>$data['email'],'password' => $data['password']])){
                    if(Auth::user()->status == 0){
                        Auth::logout();
                        return response()->json(['type'=>'inactive', 'message'=>'Tài khoản chưa được kích hoạt! Vui lòng liên hệ admin!']);
                    }
                    
                    //update cart  with user_id
                    // if(!empty(Session::get('session_id'))){
                    //     // echo 'hello'; die;
                    //     $user_id = Auth::user()->id;
                    //     $session_id = Session::get('session_id');
                    //     Cart::where('session_id', $session_id)->update(['user_id'=>$user_id]);
                    // }
                    
                    $redirect = url('/');
                    Session::forget('session_id');
                    return response()->json(['type'=>'success','url'=>$redirect]);
                }else{
                    return response()->json(['type'=>'incorrect', 'message'=>'Tài khoản hoặc mật khẩu không đúng!']);
                }
            }else{
                return response()->json(['type'=>'error', 'errors'=>$validator->messages()]);
            }
        }
    }
    public function user_logout(Request $request){
        if($request->ajax()){
            Session::forget('session_id');
            Auth::logout();
        }
        return redirect('user/login-register');
        // echo "hello"; die;
    }
    public function user_confirm($code){
        $email = base64_decode($code);
        $user_count = User::where('email', $email)->count();
        if($user_count>0){
            $user_details = User::where('email', $email)->first()->toArray();
            if($user_details['status']==1){
                return redirect('user/login-register')->with('error_message', 'Tài khoản của bạn đã được kích hoạt. Vui lòng đăng nhập!');
            }else{
                User::where('email', $email)->update(['status'=>1]);
                $message_data = ['name'=>$user_details['name'],'mobile'=>$user_details['mobile'],'email'=>$user_details['email']];
                Mail::send('FlowerShop.front.emails.register', $message_data, function($message)use($email){
                    $message->to($email)->subject('Chào mừng bạn đến với FlowerShop');
                });
                return redirect('user/login-register')->with('success_message', ' Tài khoản của bạn đã được kích hoạt. Vui lòng đăng nhập!');
            }
        }else{
            abort(404);
        }
    }
}
