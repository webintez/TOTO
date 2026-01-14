<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@lordsmobility.com',
            'password' => bcrypt('password'), // Default password
        ]);

        $this->call([
            SettingsSeeder::class,
            SliderSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            NewsSeeder::class,
            TestimonialSeeder::class,
            TeamMemberSeeder::class,
            AwardSeeder::class,
        ]);
    }
}
