<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\Section;
class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $sectionRecord = [
        //     ['id'=>1, 'section_name'=>'Hoa mới về', 'status'=>1],
        //     ['id'=>2, 'section_name'=>'Hoa cưới', 'status'=>1],
        //     ['id'=>3, 'section_name'=>'Hoa hội nghị', 'status'=>1],
        // ];
        // $sectionRecord = [
        //     ['id'=>4, 'section_name'=>'Tráp ăn hỏi', 'status'=>1],
        // ];
        $sectionRecord = [
            ['id'=>5, 'section_name'=>'Xe cưới', 'url' => 'url','status'=>1],
        ];
        Section::insert($sectionRecord);
    }
}
