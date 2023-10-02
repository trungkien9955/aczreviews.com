<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\FlowerShop\Product', 'product_id');
    }
    public function attr(){
        return $this->belongsTo('App\Models\FlowerShop\ProductAttribute', 'attr_id');
    }
}
