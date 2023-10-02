<?php

namespace App\Http\Controllers\FlowerShop\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\NewsletterSubscriber;

use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function get_subscriber_email(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $subscriber_email = $data['subscriber_email'];
            $count = NewsletterSubscriber::where('email',  $subscriber_email)->count();
            if($count>0){
                return response()->json(['case'=>'error', 'error_message'=> ' Email đã tồn tại!']);
            }else{
                $new_subscriber = new NewsletterSubscriber;
                $new_subscriber->email =  $subscriber_email;
                $new_subscriber->status =  1;
                $new_subscriber->save();
                $message_data = ['email'=>$subscriber_email];
                Mail::send('FlowerShop.front.emails.subscriber_welcome_email', $message_data, function($message)use($subscriber_email){
                    $message->to($subscriber_email)->subject('Đăng ký email thành công');
                });
                return response()->json(['case'=>'success', 'success_message'=> ' Đăng ký email thành công, vui lòng kiểm tra hòm thư!']);
            }
        }
    }

}
