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
        // $rating_records = [
        //     ['id'=>1, 'user_id'=> 44, 'product_id'=>11, 'review' => 'Good','rating'=> 4,'status'=>1],
        //     ['id'=>2, 'user_id'=> 44, 'product_id'=>3, 'review' => 'Very good','rating'=> 5,'status'=>1],
        //     ['id'=>3, 'user_id'=> 44, 'product_id'=>11, 'review' => 'OK','rating'=> 3,'status'=>1],
        //     ['id'=>4, 'user_id'=> 44, 'product_id'=>3, 'review' => 'fINE','rating'=> 2,'status'=>1],
        // ];
                $rating_records = [
            ['id'=>9, 'user_id'=> 44, 'product_id'=>4, 'review' => 'Good','rating'=> 4,'status'=>1],
            ['id'=>10, 'user_id'=> 44, 'product_id'=>5, 'review' => 'Very good','rating'=> 5,'status'=>1],
            ['id'=>11, 'user_id'=> 44, 'product_id'=>6, 'review' => 'OK','rating'=> 3,'status'=>1],
            ['id'=>12, 'user_id'=> 44, 'product_id'=>7, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>13, 'user_id'=> 44, 'product_id'=>8, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>14, 'user_id'=> 44, 'product_id'=>9, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>15, 'user_id'=> 44, 'product_id'=>10, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>16, 'user_id'=> 44, 'product_id'=>11, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>17, 'user_id'=> 44, 'product_id'=>12, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>18, 'user_id'=> 44, 'product_id'=>13, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>19, 'user_id'=> 44, 'product_id'=>14, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>20, 'user_id'=> 44, 'product_id'=>15, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>21, 'user_id'=> 44, 'product_id'=>16, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>22, 'user_id'=> 44, 'product_id'=>17, 'review' => 'fINE','rating'=> 2,'status'=>1],
            ['id'=>23, 'user_id'=> 44, 'product_id'=>18, 'review' => 'fINE','rating'=> 2,'status'=>1],

        ];
        Rating::insert($rating_records);
    }
}
