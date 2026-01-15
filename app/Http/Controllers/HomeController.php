<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = \App\Models\Slider::where('is_active', true)->orderBy('order')->get();
        $featuredProducts = \App\Models\Product::where('is_active', true)->where('is_featured', true)->take(6)->get();
        $latestNews = \App\Models\News::where('is_active', true)->latest('published_at')->take(3)->get();
        $testimonials = \App\Models\Testimonial::where('is_active', true)->latest()->get();
        
        // Counter stats (can be dynamic if settings exist, otherwise static defaults)
        $stats = [
            'dealers' => \App\Models\Setting::where('key', 'stats_dealers')->value('value') ?? '300',
            'states' => \App\Models\Setting::where('key', 'stats_states')->value('value') ?? '22',
            'sold' => \App\Models\Setting::where('key', 'stats_sold')->value('value') ?? '5000',
            'experience' => \App\Models\Setting::where('key', 'stats_experience')->value('value') ?? '10',
        ];

        $aboutImage = \App\Models\Setting::where('key', 'home_about_image')->value('value');

        return view('home', compact('sliders', 'featuredProducts', 'latestNews', 'testimonials', 'stats', 'aboutImage'));
    }
}
