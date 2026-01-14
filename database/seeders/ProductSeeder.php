<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scooterCat = ProductCategory::where('slug', 'electric-scooters')->first();
        $bikeCat = ProductCategory::where('slug', 'electric-bikes')->first();
        $loaderCat = ProductCategory::where('slug', 'loader-vehicles')->first();

        $products = [
            [
                'product_category_id' => $scooterCat?->id,
                'name' => 'Lords Zoom',
                'slug' => 'lords-zoom',
                'tagline' => 'Zoom past the traffic',
                'short_description' => 'A high-speed electric scooter designed for the urban commuter.',
                'description' => 'Experience the thrill of electric mobility with Lords Zoom. Featuring a powerful motor, long-lasting battery, and stylish design, it is the perfect companion for your daily rides.',
                'price' => 75000.00,
                'is_featured' => true,
                'features_list' => json_encode(['60km/h Top Speed', '100km Range', '3-4 Hours Charging']),
            ],
            [
                'product_category_id' => $scooterCat?->id,
                'name' => 'Lords Prime',
                'slug' => 'lords-prime',
                'tagline' => 'Prime performance',
                'short_description' => 'Reliable and affordable low-speed electric scooter.',
                'description' => 'Lords Prime offers a balance of performance and economy. No license required, making it ideal for students and local commutes.',
                'price' => 55000.00,
                'is_featured' => true,
                'features_list' => json_encode(['25km/h Top Speed', '80km Range', 'Detachable Battery']),
            ],
             [
                'product_category_id' => $bikeCat?->id,
                'name' => 'Lords Beast',
                'slug' => 'lords-beast',
                'tagline' => 'Unleash the Beast',
                'short_description' => 'Sporty electric motorcycle with aggressive styling.',
                'description' => 'Dominate the roads with Lords Beast. High torque, rapid acceleration, and a design that turns heads.',
                'price' => 120000.00,
                'is_featured' => true,
                'features_list' => json_encode(['85km/h Top Speed', '120km Range', 'Disk Brakes']),
            ],
            [
                'product_category_id' => $loaderCat?->id,
                'name' => 'Lords King Loader',
                'slug' => 'lords-king-loader',
                'tagline' => 'King of Loads',
                'short_description' => 'Heavy duty electric cargo loader.',
                'description' => 'Built for business. The Lords King Loader ensures low running costs and high load capacity.',
                'price' => 140000.00,
                'is_featured' => false,
                'features_list' => json_encode(['500kg Load Capacity', 'High Torque Motor', 'Metal Body']),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
