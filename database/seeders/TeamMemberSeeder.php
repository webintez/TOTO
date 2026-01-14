<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'Amit Gupta',
                'designation' => 'Founder & CEO',
                'bio' => 'Visionary leader with over 20 years of experience in the automobile industry.',
                'image' => '',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Neha Verma',
                'designation' => 'Chief Technology Officer',
                'bio' => 'Expert in battery technology and electric drivetrains.',
                'image' => '',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Suresh Kumar',
                'designation' => 'Head of Sales',
                'bio' => 'Driving the expansion of Lords Mobility across the nation.',
                'image' => '',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($members as $member) {
            DB::table('team_members')->insert($member);
        }
    }
}
