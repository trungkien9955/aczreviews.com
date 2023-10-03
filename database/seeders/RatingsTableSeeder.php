<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rating_records = [
            ['id'=>1, 'user_id'=> 44, 'product_id'=>11, 'review' => 'Good','rating'=> 4,'status'=>1],
            ['id'=>2, 'user_id'=> 44, 'product_id'=>3, 'review' => 'Very good','rating'=> 5,'status'=>1],
            ['id'=>3, 'user_id'=> 44, 'product_id'=>11, 'review' => 'OK','rating'=> 3,'status'=>1],
            ['id'=>4, 'user_id'=> 44, 'product_id'=>3, 'review' => 'fINE','rating'=> 2,'status'=>1],

        ];
        Rating::insert($rating_records);
    }
}
