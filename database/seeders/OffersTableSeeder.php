<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Offer;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offer_records = [
            ['id'=>1, 'product_id' =>3,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
            ['id'=>2, 'product_id' =>4,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 30000, 'status' => 1],
            ['id'=>3, 'product_id' =>5,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 70000, 'status' => 1],
            ['id'=>4, 'product_id' =>6,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
            ['id'=>5, 'product_id' =>7,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 90000, 'status' => 1],
            ['id'=>6, 'product_id' =>8,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
            ['id'=>7, 'product_id' =>9,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
            ['id'=>8, 'product_id' =>10,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 70000, 'status' => 1],
            ['id'=>9, 'product_id' =>11,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
            ['id'=>10, 'product_id' =>12,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 90000, 'status' => 1],
            ['id'=>11, 'product_id' =>13,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
            ['id'=>12, 'product_id' =>14,'status' =>1, 'name'=> 'Quà tặng 1', 'price'=> 50000, 'status' => 1],
        ];
        Offer::insert($offer_records);
    }
}
