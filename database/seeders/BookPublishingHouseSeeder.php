<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookPublishingHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 15; $i++) {
            $bookPublishingHouse[] = [
                'book_id' => $faker->unique()->numberBetween(1,15),
                'publishing_house_id' => $faker->numberBetween(1,5),
            ];
        }

        DB::table('book_publishing_house')->insert($bookPublishingHouse);
    }
}
