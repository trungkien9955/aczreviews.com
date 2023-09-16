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
        // $ProductAttributeRecords = [
        //     ['id'=>1, 'product_id'=> 1, 'size'=>'Small', 'price'=>100000, 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
        //     ['id'=>2, 'product_id'=> 1, 'size'=>'Medium', 'price'=>200000, 'stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
        //     ['id'=>3, 'product_id'=> 1, 'size'=>'Large', 'price'=>300000, 'stock'=> 20, 'sku'=>'RC001-L', 'status'=>1],
        //     ['id'=>4, 'product_id'=> 2, 'size'=>'Small', 'price'=>150000, 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
        //     ['id'=>5, 'product_id'=> 2, 'size'=>'Medium', 'price'=>250000, 'stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
        //     ['id'=>6, 'product_id'=> 2, 'size'=>'Large', 'price'=>350000, 'stock'=> 20, 'sku'=>'RC001-L', 'status'=>1],
        //     ['id'=>7, 'product_id'=> 3, 'size'=>'Small', 'price'=>150000, 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
        //     ['id'=>8, 'product_id'=> 3, 'size'=>'Medium', 'price'=>250000, 'stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
        //     ['id'=>9, 'product_id'=> 3, 'size'=>'Large', 'price'=>350000, 'stock'=> 20, 'sku'=>'RC001-L', 'status'=>1]
        // ];
        $ProductAttributeRecords = [
            ['id'=>10, 'product_id'=> 4, 'size'=>'S', 'price'=>100000, 'color' => 'Đỏ', 'image' => '', 'stock'=> 10, 'sku'=>'RC001-S', 'status'=>1],
            ['id'=>11, 'product_id'=> 4, 'size'=>'M', 'price'=>200000, 'color' => 'Vàng', 'image' => '','stock'=> 15, 'sku'=>'RC001-M', 'status'=>1],
            ['id'=>12, 'product_id'=> 4, 'size'=>'L', 'price'=>300000, 'color' => 'Tím', 'image' => '','stock'=> 20, 'sku'=>'RC001-L', 'status'=>1],
            ['id'=>13, 'product_id'=> 5, 'size'=>'S', 'price'=>150000, 'color' => 'Đỏ', 'image' => '','stock'=> 15, 'sku'=>'RC001-S', 'status'=>1],
            ['id'=>14, 'product_id'=> 5, 'size'=>'M', 'price'=>250000, 'color' => 'Vàng', 'image' => '','stock'=> 20, 'sku'=>'RC001-M', 'status'=>1],
            ['id'=>15, 'product_id'=> 5, 'size'=>'L', 'price'=>350000, 'color' => 'Tím', 'image' => '','stock'=> 25, 'sku'=>'RC001-L', 'status'=>1],
            ['id'=>16, 'product_id'=> 6, 'size'=>'S', 'price'=>200000, 'color' => 'Đỏ', 'image' => '','stock'=> 25, 'sku'=>'RC001-S', 'status'=>1],
            ['id'=>17, 'product_id'=> 6, 'size'=>'M', 'price'=>300000, 'color' => 'Vàng', 'image' => '','stock'=> 30, 'sku'=>'RC001-M', 'status'=>1],
            ['id'=>18, 'product_id'=> 6, 'size'=>'L', 'price'=>400000, 'color' => 'Tím', 'image' => '','stock'=> 35, 'sku'=>'RC001-L', 'status'=>1]
        ];
        ProductAttribute::insert($ProductAttributeRecords);
    }
}
