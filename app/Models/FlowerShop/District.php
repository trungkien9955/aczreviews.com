<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    public function wards(){
        return $this->hasMany('App\Models\FlowerShop\Ward', 'district_id');
    }
}
