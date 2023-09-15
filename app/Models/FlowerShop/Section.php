<?php

namespace App\Models\FlowerShop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function products(){
        return $this->hasMany('App\Models\FlowerShop\Product');
    }
    public static function name($id){
        $section = Section::find($id)->toArray();
        $name = $section['section_name'];
        return $name;
    }
}
