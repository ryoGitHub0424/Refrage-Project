<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArcReference;
use App\Models\User;
use Cloudinary;

class ArcrefController extends Controller
{
    public function index() {
        return view('reference.architecture.arc_ref', [
            'arcReferences' => auth()->user()->arcReferences()->get()
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
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $formFields['image'] = $image_url;
        
        $formFields['user_id'] = auth()->id();
        
        ArcReference::create($formFields);
        
        return redirect('/architecture_references')->with('message', 'new reference is created!');
    }
    
    public function edit(ArcReference $arcReference) {
        return view('reference.architecture.arc_ref_edit', [
            'arcReference' => $arcReference
            ]);
    }
    
    public function update(Request $request, ArcReference $arcReference) {
        $formFields = $request->validate([
            'architecture_name' => 'required',
            'architect_name' => 'required',
            'year' => 'required',
            'location' => 'required',
            'how' => 'required',
            'overview' => 'required',
        ]);
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $formFields['image'] = $image_url;

        $arcReference->update($formFields);

        return redirect('/architecture_references');
    }
    
    public function destroy(ArcReference $arcReference) {
        $arcReference->delete();
        return redirect('/architecture_references');
    }
}
