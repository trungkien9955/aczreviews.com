<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\ProductRating;
class ProductRatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_rating_records = [
            ['id'=>1, 'product_id'=> 11, 'product_total_score'=>60, 'product_rate_count' => 7, 'status'=>1],
            ['id'=>2, 'product_id'=> 3, 'product_total_score'=>28, 'product_rate_count' => 3, 'status'=>1]
        ];
        ProductRating::insert($product_rating_records);
    }
}
