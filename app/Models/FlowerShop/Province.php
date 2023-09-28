<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public function districts(){
        return $this->hasMany('App\Models\FlowerShop\District', 'province_id');
    }
}
