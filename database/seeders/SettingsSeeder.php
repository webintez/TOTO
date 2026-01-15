<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General
            [
                'key' => 'site_name',
                'value' => 'Lords Mobility',
                'group' => 'general',
                'type' => 'text',
            ],
            [
                'key' => 'site_description',
                'value' => 'Leading Electric Vehicle Manufacturer in India',
                'group' => 'general',
                'type' => 'textarea',
            ],
            
            // Contact
            [
                'key' => 'contact_email',
                'value' => 'info@lordsmobility.com',
                'group' => 'contact',
                'type' => 'text',
            ],
            [
                'key' => 'contact_phone',
                'value' => '+91 98765 43210',
                'group' => 'contact',
                'type' => 'text',
            ],
            [
                'key' => 'contact_address',
                'value' => 'A-123, Industrial Area Phase II, New Delhi, Delhi 110020',
                'group' => 'contact',
                'type' => 'textarea',
            ],
            [
                'key' => 'google_map_embed',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.83923192776!2d77.0688975472578!3d28.52728034389636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1705307000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'group' => 'contact',
                'type' => 'textarea',
            ],

            // Social
            [
                'key' => 'social_facebook',
                'value' => 'https://facebook.com/lordsmobility',
                'group' => 'social',
                'type' => 'text',
            ],
            [
                'key' => 'social_twitter',
                'value' => 'https://twitter.com/lordsmobility',
                'group' => 'social',
                'type' => 'text',
            ],
             [
                'key' => 'social_instagram',
                'value' => 'https://instagram.com/lordsmobility',
                'group' => 'social',
                'type' => 'text',
            ],
             [
                'key' => 'social_linkedin',
                'value' => 'https://linkedin.com/company/lordsmobility',
                'group' => 'social',
                'type' => 'text',
            ],
             [
                'key' => 'social_youtube',
                'value' => 'https://youtube.com/lordsmobility',
                'group' => 'social',
                'type' => 'text',
            ],

            // Stats
            [
                'key' => 'stats_happy_customers',
                'value' => '10000+',
                'group' => 'stats',
                'type' => 'text',
            ],
            [
                'key' => 'stats_years_experience',
                'value' => '25',
                'group' => 'stats',
                'type' => 'text',
            ],
            [
                'key' => 'stats_distributors',
                'value' => '500+',
                'group' => 'stats',
                'type' => 'text',
            ],
             [
                'key' => 'stats_technicians',
                'value' => '150+',
                'group' => 'stats',
                'type' => 'text',
            ],
            [
                'key' => 'home_about_image',
                'value' => null, // User will upload
                'group' => 'home',
                'type' => 'image',
            ],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
