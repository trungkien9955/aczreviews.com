<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\FlowerShop\Product', 'product_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\FlowerShop\User', 'user_id');
    }
}

