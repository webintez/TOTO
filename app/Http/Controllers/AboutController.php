<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = \App\Models\TeamMember::where('is_active', true)->orderBy('order')->get();
        $awards = \App\Models\Award::where('is_active', true)->latest('year')->get();
        
        return view('about', compact('teamMembers', 'awards'));
    }
}
