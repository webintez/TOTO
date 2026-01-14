<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductCategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electric Scooters',
                'slug' => 'electric-scooters',
                'description' => 'High-speed and low-speed electric scooters for daily commute.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Electric Bikes',
                'slug' => 'electric-bikes',
                'description' => 'Stylish and powerful electric motorcycles.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Loader Vehicles',
                'slug' => 'loader-vehicles',
                'description' => 'Heavy-duty electric three-wheelers for cargo transport.',
                'image' => null,
                'is_active' => true,
            ],
             [
                'name' => 'E-Rickshaws',
                'slug' => 'e-rickshaws',
                'description' => 'Comfortable passenger e-rickshaws.',
                'image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
