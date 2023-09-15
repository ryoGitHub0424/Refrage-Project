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
            'artPortfolios' => ArtPortfolio::latest()->take(3),
            ]);
    }
    
}
