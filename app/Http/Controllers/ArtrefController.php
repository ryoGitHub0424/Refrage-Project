<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtReference;
use Cloudinary;

class ArtrefController extends Controller
{
    public function index() {
        return view('reference.art.art_ref', [
            'artReferences' => auth()->user()->artReferences()->get()
            ]);
    }
    
    public function show(ArtReference $artReference) {
        return view('reference.art.art_ref_detail',[
            'artReference' => $artReference
            ]);
    }
    
    public function create() {
        return view('reference.art.art_ref_add');
    }
    
    public function store(Request $request) {
        $formFields = $request->validate([
            'art_name' => 'required',
            'artist_name' => 'required',
            'year' => 'required',
            'location' => 'required',
            'medium' => 'required',
            'overview' => 'required',
        ]);

        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $formFields['image'] = $image_url;
        
        $formFields['user_id'] = auth()->id();
        
        ArtReference::create($formFields);
        
        return redirect('art_references');
    }
    
    public function edit(ArtReference $artReference) {
        return view('reference.art.art_ref_edit', [
            'artReference' => $artReference
            ]);
    }
    
    public function update(Request $request, ArtReference $artReference) {
        $formFields = $request->validate([
            'art_name' => 'required',
            'artist_name' => 'required',
            'year' => 'required',
            'location' => 'required',
            'medium' => 'required',
            'overview' => 'required',
        ]);

        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        
        $formFields['image'] = $image_url;

        $artReference->update($formFields);

        return redirect('/art_references');
    }
    
    public function destroy(ArtReference $artReference) {
        $artReference->delete();
        return redirect('/art_references');
    }
}
