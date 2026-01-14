<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = [
            [
                'title' => 'Lords Mobility Launches New High-Speed Scooter',
                'slug' => 'lords-mobility-launches-new-high-speed-scooter',
                'excerpt' => 'Lords Mobility has unveiled its latest high-speed electric scooter, the Lords Zoom, targeting urban commuters.',
                'content' => '<p>Lords Mobility, a leading name in the EV sector, has officially launched the Lords Zoom. This high-speed electric scooter is designed to meet the growing demand for efficient and eco-friendly urban transportation.</p><p>With a top speed of 60km/h and a range of 100km per charge, the Lords Zoom is set to redefine the daily commute. It comes equipped with advanced features such as digital display, anti-theft alarm, and fast charging capabilities.</p>',
                'image' => '',
                'published_at' => Carbon::now()->subDays(5),
                'is_active' => true,
            ],
            [
                'title' => 'Expansion Plans: 50 New Dealerships Across North India',
                'slug' => 'expansion-plans-50-new-dealerships',
                'excerpt' => 'Lords Mobility announces aggressive expansion plans with 50 new dealerships opening in the next quarter.',
                'content' => '<p>In a move to strengthen its presence in North India, Lords Mobility has announced the opening of 50 new dealerships. This expansion aims to bring Lords electric vehicles closer to customers in tier-2 and tier-3 cities.</p><p>"We are committed to making electric mobility accessible to everyone," said the CEO of Lords Mobility. "Our network expansion is a testament to the growing trust in our brand."</p>',
                'image' => '',
                'published_at' => Carbon::now()->subDays(12),
                'is_active' => true,
            ],
            [
                'title' => 'Lords Mobility Voted Best EV Brand 2024',
                'slug' => 'lords-mobility-voted-best-ev-brand-2024',
                'excerpt' => 'Lords Mobility has been recognized as the Best EV Brand at the National EV Summit 2024.',
                'content' => '<p>We are proud to announce that Lords Mobility has been awarded the "Best EV Brand of the Year" at the prestigious National EV Summit 2024. This award recognizes our commitment to innovation, quality, and customer satisfaction.</p><p>We thank our loyal customers and dedicated partners for making this achievement possible.</p>',
                'image' => '',
                'published_at' => Carbon::now()->subDays(20),
                'is_active' => true,
            ],
        ];

        foreach ($news as $item) {
            DB::table('news')->insert($item);
        }
    }
}
