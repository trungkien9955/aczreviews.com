<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\RatingInfo;

class RatingInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rating_info_records = [
            ['id'=>1, 'product_id'=> 11, 'name'=>'Ngọc Thảo', 'email' => 'thao@gmail.com','phone'=> '0888999333','rating'=> 9,'comment'=>'abcxyz','status'=>1],
            ['id'=>2, 'product_id'=> 3, 'name'=>'Thùy Linh', 'email' => 'linh@gmail.com','phone'=> '0888555666','rating'=> 8,'comment'=>'abcxyzdef','status'=>1],
        ];
        RatingInfo::insert($rating_info_records);
    }
}
