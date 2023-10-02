<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowerShop\NewsletterSubscriber;
class NewsletterSubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsletter_subscriber_records = [
            ['id'=>1, 'email' =>'email1@gmail.com','status' =>1],
            ['id'=>2, 'email' =>'email2@gmail.com','status' =>1],
            ['id'=>3, 'email' =>'email3@gmail.com','status' =>1],
            ['id'=>4, 'email' =>'email4@gmail.com','status' =>1],
            ['id'=>5, 'email' =>'email5@gmail.com','status' =>1],
        ];
        NewsletterSubscriber::insert($newsletter_subscriber_records);
    }
}
