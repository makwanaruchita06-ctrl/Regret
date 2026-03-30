<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the homepage with latest 6 active services.
     */
    public function index(): View
    {
        $services = Service::where('status', 'active')
                          ->latest('created_at')
                          ->take(6)
                          ->get();
        
        $portfolios = Portfolio::where('status', 'active')
                          ->latest('created_at')
                          ->take(3)
                          ->get();
        
        return view('Home', compact('services', 'portfolios'));
    }
}

