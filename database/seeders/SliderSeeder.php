<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'The Future of Mobility',
                'subtitle' => 'Experience the power of electric with Lords Mobility',
                'image' => '', // Placeholder handled in view if empty, or we can use a URL if external URLs are supported by our logic (which assumes Storage::url usually, so empty is safer as fallback)
                'link' => '/products',
                'button_text' => 'Explore Models',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Eco-Friendly & Efficient',
                'subtitle' => 'Zero emissions, maximum performance',
                'image' => '', 
                'link' => '/about',
                'button_text' => 'About Us',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Join the Revolution',
                'subtitle' => 'Become a dealer today',
                'image' => '',
                'link' => '/contact',
                'button_text' => 'Contact Us',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            DB::table('sliders')->insert($slider);
        }
    }
}
