<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $categories = \App\Models\Category::factory(10)->create();

         User::factory()
            ->count(5)
             ->has(
                 Book::factory()
                     ->count(10)
                     ->state(function (array $attributes) use ($categories): array {
                         return ['category_id' => $categories->random()->id];
                     })
             )
             ->create();
    }
}
