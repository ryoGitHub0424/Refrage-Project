<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArcPortfolio;
use Cloudinary;

class ArcportController extends Controller
{
   public function index() {
       return view('portfolio.architecture.arc_port', [
           'arcPortfolios' => auth()->user()->arcPortfolios()->get()
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

        $image_url = Cloudinary::upload($request->file('thumbnail')->getRealPath())->getSecurePath();
        
        $formFields['thumbnail'] = $image_url;
        
        $formFields['user_id'] = auth()->id();
        
        $formFields['user_name'] = auth()->user()->name;
        
        ArcPortfolio::create($formFields);
        
        return redirect('/architecture_portfolios');
   }
   
   public function edit(arcPortfolio $arcPortfolio) {
       return view('portfolio.architecture.arc_port_edit', [
           'arcPortfolio' => $arcPortfolio
           ]);
   }
   
   public function update(Request $request, ArcPortfolio $arcPortfolio) {
       // Make sure logged in user is owener
        if ($arcPortfolio->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
       
        $formFields = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required',
            'file' => 'required',
            'concept' => 'required',
        ]);

        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $formFields['image'] = $image_url;

        $arcPortfolio->update($formFields);

        return redirect('/architecture_portfolios');
   }
   
   public function destroy(ArcPortfolio $arcPortfolio) {
       // Make sure logged in user is owener
        if ($arcPortfolio->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
       $arcPortfolio->delete();
       return redirect('/architecture_portfolios');
   }
   
}
