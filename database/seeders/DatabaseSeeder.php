<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->createMany([
            [
                'id' => 1,
                'name' => 'Test User',
                'email' => 'test@test.com',
                'password' => bcrypt('pass123.')
            ],
            [
                'id' => 2,
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('pass123.')
            ],
            [
                'id' => 3,
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('pass123.')
            ],
            [
                'id' => 4,
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('pass123.')
            ],
            [
                'id' => 5,
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => bcrypt('pass123.')
            ],
        ]);

        $this->call([
            ItemSeeder::class
        ]);

    }
}
