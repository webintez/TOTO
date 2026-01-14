<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Rahul Sharma',
                'designation' => 'Software Engineer',
                'company' => 'Tech Solutions',
                'content' => 'I have been using the Lords Zoom for 6 months now and it has completely changed my daily commute. The ride is smooth, silent, and very economical.',
                'rating' => 5,
                'image' => '',
                'is_active' => true,
            ],
            [
                'name' => 'Priya Patel',
                'designation' => 'Student',
                'company' => 'Delhi University',
                'content' => 'Lords Prime is perfect for college. It looks great, is easy to handle, and I don\'t have to worry about petrol prices anymore!',
                'rating' => 5,
                'image' => '',
                'is_active' => true,
            ],
            [
                'name' => 'Vikram Singh',
                'designation' => 'Distributor',
                'company' => 'Green Motors',
                'content' => 'Becoming a dealer for Lords Mobility was the best business decision I made. The support from the company is excellent and customers love the products.',
                'rating' => 4,
                'image' => '',
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            DB::table('testimonials')->insert($testimonial);
        }
    }
}
