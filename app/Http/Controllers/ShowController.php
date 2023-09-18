<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArcPortfolio;
use App\Models\ArtPortfolio;

class ShowController extends Controller
{
    public function showFront() {
        return view('front', [
            'arcPortfolios' => ArcPortfolio::latest()->take(3),
            'artPortfolios' => ArtPortfolio::all()->take(3),
            ]);
    }
    
    public function loggedPage() {
        return view('logged_page', [
            'arcPortfolios' => ArcPortfolio::latest()->simplePaginate(5),
            'artPortfolios' => ArtPortfolio::latest()->simplePaginate(5),
            ]);
    }
}
