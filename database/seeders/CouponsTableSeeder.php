<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $couponRecords = [
            ['id'=>1, 'coupon_option' =>'Manual',  'coupon_code'=> 'test10', 'sections'=>'1', 'users'=>'', 'coupon_type'=>'Single','amount_type'=>'Percentage','amount'=>10,'expiry_date'=>'2022-12-24','status' =>1],
            ['id'=>2, 'coupon_option' =>'Manual',  'coupon_code'=> 'test20', 'sections'=>'2', 'users'=>'', 'coupon_type'=>'Single','amount_type'=>'Percentage','amount'=>20,'expiry_date'=>'2022-11-21','status' =>1],
            ['id'=>3, 'coupon_option' =>'Manual',  'coupon_code'=> 'test30', 'sections'=>'3', 'users'=>'', 'coupon_type'=>'Single','amount_type'=>'Percentage','amount'=>30,'expiry_date'=>'2022-10-24','status' =>1],
            ['id'=>4, 'coupon_option' =>'Manual',  'coupon_code'=> 'test40', 'sections'=>'4', 'users'=>'', 'coupon_type'=>'Single','amount_type'=>'Percentage','amount'=>40,'expiry_date'=>'2022-09-23','status' =>1],
        ];
        Coupon::insert($couponRecords);
    }
}
