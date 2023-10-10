<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $productRecords = [
        //     ['id'=> 1, 'section_id'=>1,  'product_name'=>'Hoa Lan', 'product_code'=>'LA01', 'product_color'=>'Vàng', 'product_price'=>500000, 'product_discount'=>10,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Hoa Lan', 'meta_description'=>'Hoa Lan', 'meta_keywords'=>'Hoa Lan', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 2, 'section_id'=>1,  'product_name'=>'Hoa Hồng', 'product_code'=>'HO01', 'product_color'=>'Đỏ', 'product_price'=>300000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => '', 'meta_title'=>'Hoa Hồng', 'meta_description'=>'Hoa Hồng', 'meta_keywords'=>'Hoa Hồng', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 3, 'section_id'=>2,  'product_name'=>'Hoa Ly', 'product_code'=>'LY01', 'product_color'=>'Tím', 'product_price'=>300000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => '', 'meta_title'=>'Hoa Ly', 'meta_description'=>'Hoa Ly', 'meta_keywords'=>'Hoa Ly', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 4, 'section_id'=>4,  'product_name'=>'Tráp Rồng', 'product_code'=>'TR01', 'product_color'=>'Nhiều màu', 'product_price'=>600000, 'product_discount'=>20,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Tráp Rồng', 'meta_description'=>'Tráp Rồng', 'meta_keywords'=>'Tráp Rồng', 'is_featured'=>'Yes', 'status'=>1]
        // ];
        // Product::insert($productRecords);
        // $productRecords = [
        //     ['id'=> 5, 'section_id'=>2,  'product_name'=>'Hoa 1', 'product_code'=>'LA01', 'product_color'=>'Vàng', 'product_price'=>100000, 'product_discount'=>10,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Hoa Lan', 'meta_description'=>'Hoa Lan', 'meta_keywords'=>'Hoa Lan', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 6, 'section_id'=>2,  'product_name'=>'Hoa 2', 'product_code'=>'HO01', 'product_color'=>'Đỏ', 'product_price'=>200000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => '', 'meta_title'=>'Hoa Hồng', 'meta_description'=>'Hoa Hồng', 'meta_keywords'=>'Hoa Hồng', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 7, 'section_id'=>2,  'product_name'=>'Hoa 3', 'product_code'=>'LY01', 'product_color'=>'Tím', 'product_price'=>250000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => '', 'meta_title'=>'Hoa Ly', 'meta_description'=>'Hoa Ly', 'meta_keywords'=>'Hoa Ly', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 8, 'section_id'=>4,  'product_name'=>'Tráp 2', 'product_code'=>'TR01', 'product_color'=>'Nhiều màu', 'product_price'=>600000, 'product_discount'=>20,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Tráp Rồng', 'meta_description'=>'Tráp Rồng', 'meta_keywords'=>'Tráp Rồng', 'is_featured'=>'Yes', 'status'=>1], 
        //     ['id'=> 9, 'section_id'=>3,  'product_name'=>'Tráp 2', 'product_code'=>'TR01', 'product_color'=>'Nhiều màu', 'product_price'=>600000, 'product_discount'=>20,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Tráp Rồng', 'meta_description'=>'Tráp Rồng', 'meta_keywords'=>'Tráp Rồng', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 10, 'section_id'=>3,  'product_name'=>'Tráp 2', 'product_code'=>'TR01', 'product_color'=>'Nhiều màu', 'product_price'=>600000, 'product_discount'=>20,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Tráp Rồng', 'meta_description'=>'Tráp Rồng', 'meta_keywords'=>'Tráp Rồng', 'is_featured'=>'Yes', 'status'=>1]
        // ];
        // $productRecords = [
        //     ['id'=> 11, 'section_id'=>3, 'brand_id' =>1, 'product_name'=>'Hoa hội nghị 1', 'product_code'=>'LA01', 'product_color'=>'Vàng', 'product_price'=>100000, 'product_discount'=>10,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Hoa Lan', 'meta_description'=>'Hoa Lan', 'meta_keywords'=>'Hoa Lan', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 12, 'section_id'=>3,'brand_id' =>2,  'product_name'=>'Hoa hội nghị 2', 'product_code'=>'HO01', 'product_color'=>'Đỏ', 'product_price'=>200000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => '', 'meta_title'=>'Hoa Hồng', 'meta_description'=>'Hoa Hồng', 'meta_keywords'=>'Hoa Hồng', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 13, 'section_id'=>3,'brand_id' =>3,  'product_name'=>'Hoa hội nghị 3', 'product_code'=>'LY01', 'product_color'=>'Tím', 'product_price'=>250000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => '', 'meta_title'=>'Hoa Ly', 'meta_description'=>'Hoa Ly', 'meta_keywords'=>'Hoa Ly', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 14, 'section_id'=>3,'brand_id' =>4,  'product_name'=>'Hoa hội nghị 4', 'product_code'=>'TR01', 'product_color'=>'Nhiều màu', 'product_price'=>600000, 'product_discount'=>20,  'product_image'=>'', 'product_video'=>'', 'description' => '', 'meta_title'=>'Tráp Rồng', 'meta_description'=>'Tráp Rồng', 'meta_keywords'=>'Tráp Rồng', 'is_featured'=>'Yes', 'status'=>1], 
        // ];
        // $productRecords = [
        //     ['id'=> 15, 'section_id'=>5, 'brand_id' =>1, 'product_name'=>'Xe cưới 1', 'product_code'=>'LA01', 'product_color'=>'Vàng', 'product_price'=>100000, 'product_discount'=>10,  'product_image'=>'', 'product_video'=>'', 'description' => 'Description', 'url' => 'url', 'meta_title'=>'Hoa Lan', 'meta_description'=>'Hoa Lan', 'meta_keywords'=>'Hoa Lan', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 16, 'section_id'=>5,'brand_id' =>2,  'product_name'=>'Xe cưới 2', 'product_code'=>'HO01', 'product_color'=>'Đỏ', 'product_price'=>200000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => 'Description','url' => 'url', 'meta_title'=>'Hoa Hồng', 'meta_description'=>'Hoa Hồng', 'meta_keywords'=>'Hoa Hồng', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 17, 'section_id'=>5,'brand_id' =>3,  'product_name'=>'Xe cưới 3', 'product_code'=>'LY01', 'product_color'=>'Tím', 'product_price'=>250000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => 'Description','url' => 'url', 'meta_title'=>'Hoa Ly', 'meta_description'=>'Hoa Ly', 'meta_keywords'=>'Hoa Ly', 'is_featured'=>'Yes', 'status'=>1],
        //     ['id'=> 18, 'section_id'=>5,'brand_id' =>4,  'product_name'=>'Xe cưới 4', 'product_code'=>'TR01', 'product_color'=>'Nhiều màu', 'product_price'=>600000, 'product_discount'=>20,  'product_image'=>'', 'product_video'=>'', 'description' => 'Description','url' => 'url', 'meta_title'=>'Tráp Rồng', 'meta_description'=>'Tráp Rồng', 'meta_keywords'=>'Tráp Rồng', 'is_featured'=>'No', 'status'=>1], 
        // ];
        $productRecords = [
            ['id'=> 19, 'section_id'=>5,'brand_id' =>2,  'product_name'=>'Xe cưới 6', 'product_code'=>'HO01', 'product_color'=>'Đỏ', 'product_price'=>200000, 'product_discount'=>15,  'product_image'=>'', 'product_video'=>'','description' => 'Description','url' => 'url', 'meta_title'=>'Hoa Hồng', 'meta_description'=>'Hoa Hồng', 'meta_keywords'=>'Hoa Hồng', 'is_featured'=>'Yes','product_attribute' => 'no', 'status'=>1],
        ];
        Product::insert($productRecords);
    }
}
