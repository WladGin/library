<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookAuthorSeeder extends Seeder
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
            $bookAuthor[] = [
                'book_id' => $faker->unique()->numberBetween(1,15),
                'author_id' => $faker->numberBetween(1,10),
            ];
        }

        DB::table('book_authors')->insert($bookAuthor);
    }
}
