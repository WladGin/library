<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\PublishingHouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::factory(15)->create();
        Author::factory(10)->create();
        PublishingHouse::factory(5)->create();

        $this->call(BookPublishingHouseSeeder::class);
        $this->call(BookAuthorSeeder::class);
    }
}
