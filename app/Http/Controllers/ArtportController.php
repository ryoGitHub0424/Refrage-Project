<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtPortfolio;

class ArtportController extends Controller
{
    public function index() {
        return view('portfolio.art.art_port', [
            'artPortfolios' => ArtPortfolio::all()
            ]);
    }
}
