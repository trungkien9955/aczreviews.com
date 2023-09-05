<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\ProductFilter;
class ProductFiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filterRecords = [
            ['id'=>1, 'section_ids'=>'2,3', 'filter_name'=>'Size', 'filter_column'=>'size', 'status'=> 1],
            ['id'=>2, 'section_ids'=>'4', 'filter_name'=>'Color', 'filter_column'=>'color', 'status'=> 1],
            ['id'=>3, 'section_ids'=>'5', 'filter_name'=>'Name', 'filter_column'=>'name', 'status'=> 1],
            ['id'=>4, 'section_ids'=>'2', 'filter_name'=>'Supplier', 'filter_column'=>'supplier', 'status'=> 1]
        ];
        ProductFilter::insert($filterRecords);
    }
}
