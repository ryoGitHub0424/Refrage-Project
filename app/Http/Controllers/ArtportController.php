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
    
    public function show(ArtPortfolio $artPortfolio) {
        return view('portfolio.art.art_port_detail', [
            'artPortfolio' => $artPortfolio
            ]);
    }
    
    public function create() {
        return view('portfolio.art.art_port_add');
    }
    
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'file' => 'required',
            'concept' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $formFields['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }
        
        ArtPortfolio::create($formFields);
        
        return redirect('/art_portfolios');
    }
}
