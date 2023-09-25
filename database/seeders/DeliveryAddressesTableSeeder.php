<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\DeliveryAddress;
class DeliveryAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delivery_address_records = [
            ['id'=>1, 'user_id' =>1,  'name'=> 'Jane', 'address'=>'No.1', 'city'=>'Hanoi', 'email'=>'jane@gmail.com','mobile'=>'0666999333','status' =>1],
            ['id'=>2, 'user_id' =>2,  'name'=> 'Charles', 'address'=>'No.2', 'city'=>'Ho Chi Minh City', 'email'=>'charles@gmail.com','mobile'=>'0566888999','status' =>1],
            ['id'=>3, 'user_id' =>3,  'name'=> 'Leopold', 'address'=>'No.3', 'city'=>'Da Nang', 'email'=>'leopold@gmail.com','mobile'=>'0666999888','status' =>1],
        ];
        DeliveryAddress::insert($delivery_address_records);
    }
}
