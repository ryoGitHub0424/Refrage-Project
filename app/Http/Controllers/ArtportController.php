<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtPortfolio;

class ArtportController extends Controller
{
    public function index() {
        return view('portfolio.art.art_port', [
            'artPortfolios' => auth()->user()->artPortfolios()->get()
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
        
        $formFields['user_id'] = auth()->id();
        
        $formFields['user_name'] = auth()->user()->name;
        
        ArtPortfolio::create($formFields);
        
        return redirect('/art_portfolios');
    }
    
    public function edit(ArtPortfolio $artPortfolio) {
        return view('portfolio.art.art_port_edit', [
            'artPortfolio' => $artPortfolio
            ]);
    }
    
    public function update(Request $request, ArtPortfolio $artPortfolio) {
        // Make sure logged in user is owener
        if ($artPortfolio->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'file' => 'required',
            'concept' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $formFields['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $artPortfolio->update($formFields);

        return redirect('/art_portfolios');
    }
    
    public function destroy(ArtPortfolio $artPortfolio) {
        // Make sure logged in user is owener
        if ($artPortfolio->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $artPortfolio->delete();
        return redirect('/art_portfolios');
    }
}
