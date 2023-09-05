<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\ProductAttribute;
class ProductAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProductAttributeRecords = [
            ['id'=>1, 'product_id'=> 1, 'size'=>'Small', 'price'=>100000, 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
            ['id'=>2, 'product_id'=> 1, 'size'=>'Medium', 'price'=>200000, 'stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
            ['id'=>3, 'product_id'=> 1, 'size'=>'Large', 'price'=>300000, 'stock'=> 20, 'sku'=>'RC001-L', 'status'=>1],
            ['id'=>4, 'product_id'=> 2, 'size'=>'Small', 'price'=>150000, 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
            ['id'=>5, 'product_id'=> 2, 'size'=>'Medium', 'price'=>250000, 'stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
            ['id'=>6, 'product_id'=> 2, 'size'=>'Large', 'price'=>350000, 'stock'=> 20, 'sku'=>'RC001-L', 'status'=>1],
            ['id'=>7, 'product_id'=> 3, 'size'=>'Small', 'price'=>150000, 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
            ['id'=>8, 'product_id'=> 3, 'size'=>'Medium', 'price'=>250000, 'stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
            ['id'=>9, 'product_id'=> 3, 'size'=>'Large', 'price'=>350000, 'stock'=> 20, 'sku'=>'RC001-L', 'status'=>1]
        ];
        ProductAttribute::insert($ProductAttributeRecords);
    }
}
