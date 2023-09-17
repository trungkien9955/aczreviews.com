<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    public static function stock($product_id){
        $stock = ProductAttribute::select('stock')->where(['product_id'=> $product_id])->sum('stock');
        return $stock;
    }
}
