<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Brand;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandRecords = [
            ['id'=>1, 'name' => 'Brand 1', 'status' => 1],
            ['id'=>2, 'name' => 'Brand 2', 'status' => 1],
            ['id'=>3, 'name' => 'Brand 3', 'status' => 1],
            ['id'=>4, 'name' => 'Brand 4', 'status' => 1],
            ['id'=>5, 'name' => 'Brand 5', 'status' => 1],
            ['id'=>6, 'name' => 'Brand 6', 'status' => 1],
        ];
        Brand::insert($brandRecords);
    }
}
