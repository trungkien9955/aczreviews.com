<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\ProductFilterValue;
class ProductFilterValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $filterValueRecords = [
        //     ['id'=>1, 'filter_id'=>1, 'filter_value'=>'S', 'status'=>1],
        //     ['id'=>2, 'filter_id'=>1, 'filter_value'=>'M', 'status'=>1],
        //     ['id'=>3, 'filter_id'=>1, 'filter_value'=>'L', 'status'=>1],
        //     ['id'=>4, 'filter_id'=>2, 'filter_value'=>'Red', 'status'=>1],
        //     ['id'=>5, 'filter_id'=>2, 'filter_value'=>'Yellow', 'status'=>1],
        //     ['id'=>6, 'filter_id'=>2, 'filter_value'=>'Purple', 'status'=>1],
        //     ['id'=>7, 'filter_id'=>3, 'filter_value'=>'Mercedes', 'status'=>1],
        //     ['id'=>8, 'filter_id'=>3, 'filter_value'=>'Audi', 'status'=>1],
        //     ['id'=>9, 'filter_id'=>3, 'filter_value'=>'BMW', 'status'=>1],
        //     ['id'=>10, 'filter_id'=>4, 'filter_value'=>'Supplier 1', 'status'=>1],
        //     ['id'=>11, 'filter_id'=>4, 'filter_value'=>'Supplier 2', 'status'=>1],
        //     ['id'=>12, 'filter_id'=>4, 'filter_value'=>'Supplier 3', 'status'=>1],
        // ];
        $filterValueRecords = [
            ['id'=>13, 'filter_id'=>1, 'filter_value'=>'S', 'status'=>1],
            ['id'=>14, 'filter_id'=>1, 'filter_value'=>'M', 'status'=>1],
            ['id'=>15, 'filter_id'=>1, 'filter_value'=>'L', 'status'=>1],

        ];
        ProductFilterValue::insert($filterValueRecords);
    }
}
