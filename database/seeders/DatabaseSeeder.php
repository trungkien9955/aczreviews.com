<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(SectionsTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);'
        // $this->call(ProductAttributesTableSeeder::class);
        // $this->call(ProductFiltersTableSeeder::class);
        // $this->call(ProductFilterValuesTableSeeder::class);
        // $this->call(BrandsTableSeeder::class);
        // $this->call(FlowerShopAdminsTableSeeder::class);
        // $this->call(ProductFilterValuesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(SectionsTableSeeder::class);
        // $this->call(ProductAttributesTableSeeder::class);
        // $this->call(ProductDescriptionsTableSeeder::class);
        // $this->call(ProductRatingsTableSeeder::class);
        $this->call(RatingInfoTableSeeder::class);
    }
}
