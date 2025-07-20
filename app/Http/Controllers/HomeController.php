<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::where('is_featured', true)
                                 ->where('status', 'completed')
                                 ->take(3)
                                 ->get();
        
        $upcomingEvents = Event::where('event_date', '>=', now())
                              ->where('is_active', true)
                              ->orderBy('event_date')
                              ->take(3)
                              ->get();

        return view('home', compact('featuredProjects', 'upcomingEvents'));
    }
}