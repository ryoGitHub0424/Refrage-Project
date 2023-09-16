<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArcReference;

class ArcrefController extends Controller
{
    public function index() {
        return view('reference.architecture.arc_ref', [
            'arcReferences' => ArcReference::all()
            ]);
    }
    
    public function show(ArcReference $arcReference) {
        return view('reference.architecture.arc_ref_detail', [
            'arcReference' => $arcReference
            ]);
    }
    
    public function create() {
        return view('reference.architecture.arc_ref_add');
    }
    
    public function store(Request $request) {
        $formFields = $request->validate([
            'architecture_name' => 'required',
            'architect_name' => 'required',
            'year' => 'required',
            'location' => 'required',
            'how' => 'required',
            'overview' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        
        ArcReference::create($formFields);
        
        return redirect('/architecture_references')->with('message', 'new reference is created!');
    }
}
