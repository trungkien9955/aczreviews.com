<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Gift;

class GiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gift_records = [
            ['id'=>1, 'product_id'=> 11, 'name' =>'Gift name 1','price'=> 50000,'image'=> '', 'status' =>1],
            ['id'=>2, 'product_id'=> 11, 'name' =>'Gift name 2','price'=> 60000,'image'=> '', 'status' =>1],
            ['id'=>3, 'product_id'=> 3, 'name' =>'Gift name 3','price'=> 70000,'image'=> '', 'status' =>1],
            ['id'=>4, 'product_id'=> 3, 'name' =>'Gift name 4','price'=> 80000,'image'=> '', 'status' =>1],
            ['id'=>5, 'product_id'=> 10, 'name' =>'Gift name 5','price'=> 90000,'image'=> '', 'status' =>1],
        ];
        Gift::insert($gift_records);
    }
}
