<?php

namespace App\Http\Controllers\FlowerShop\Front;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\FlowerShop\User;
class UserController extends Controller
{
    public function login_register(){
        return view('FlowerShop.front.users.login_register');
    }
    public function register(Request $request){
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
            $user->status =1;
            $user->save();
            //sending email
            $email = $data['email'];
            $message_data = ['name'=>$data['name'],'mobile'=>$data['mobile'],'email'=>$data['email']];
            Mail::send('FlowerShop.front.emails.register', $message_data, function($message)use($email){
                $message->to($email)->subject('Chào mừng bạn đến với FlowerShop');
            });
            if(Auth::attempt(['email'=>$data['email'],'password' => $data['password']])){
                $redirect = url('cart');
                return response()->json(['url'=>$redirect]);
            }
        }
    }
}
