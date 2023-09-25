<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class DeliveryAddress extends Model
{
    use HasFactory;
    public static function get_delivery_address($user_id){
        $delivery_address = DeliveryAddress::where('user_id', Auth::user()->id)->get()->toArray();
        return $delivery_address;
    }
}
