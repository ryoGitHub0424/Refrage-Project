<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArcPortfolio;

class ArcportController extends Controller
{
   public function index() {
       return view('portfolio.architecture.arc_port', [
           'arcPortfolios' => ArcPortfolio::all()
           ]);
   }
   
   public function show(ArcPortfolio $arcPortfolio) {
       return view('portfolio.architecture.arc_port_detail', [
           'arcPortfolio' => $arcPortfolio
           ]);
   }
   
   public function create() {
       return view('portfolio.architecture.arc_port_add');
   }
   
   public function store(Request $request) {
       $formFields = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'file' => 'required',
            'concept' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $formFields['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }
        
        ArcPortfolio::create($formFields);
        
        return redirect('/architecture_portfolios');
   }
   
   public function edit(arcPortfolio $arcPortfolio) {
       return view('portfolio.architecture.arc_port_edit', [
           'arcPortfolio' => $arcPortfolio
           ]);
   }
   
   public function update(Request $request, ArcPortfolio $arcPortfolio) {
        $formFields = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'file' => 'required',
            'concept' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $formFields['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $arcPortfolio->update($formFields);

        return redirect('/architecture_portfolios');
   }
   
   public function destroy(ArcPortfolio $arcPortfolio) {
       $arcPortfolio->delete();
       return redirect('/architecture_portfolios');
   }
   
}
