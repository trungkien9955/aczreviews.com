<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Color;
class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colorRecords = [
            ['id'=>1, 'name' =>'red',  'v_name'=> 'Đỏ', 'code'=>'R', 'image'=>'', 'status' =>1],
            ['id'=>2, 'name' =>'pink',  'v_name'=> 'Hồng', 'code'=>'P', 'image'=>'', 'status' =>1],
            ['id'=>3, 'name' =>'yellow',  'v_name'=> 'Vàng', 'code'=>'Y', 'image'=>'', 'status' =>1],
            ['id'=>4, 'name' =>'green',  'v_name'=> 'Xanh lục', 'code'=>'G', 'image'=>'', 'status' =>1],
        ];
        Color::insert($colorRecords);
    }
}
