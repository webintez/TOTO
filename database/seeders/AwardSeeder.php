<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $awards = [
            [
                'title' => 'Best EV Start-up 2023',
                'year' => '2023',
                'image' => '',
                'description' => 'Awarded by Auto India Forum.',
                'is_active' => true,
            ],
            [
                'title' => 'Green Energy Excellence',
                'year' => '2022',
                'image' => '',
                'description' => 'Recognized for contribution to sustainable energy.',
                'is_active' => true,
            ],
        ];

        foreach ($awards as $award) {
            DB::table('awards')->insert($award);
        }
    }
}
