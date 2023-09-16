<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtReference;

class ArtrefController extends Controller
{
    public function index() {
        return view('reference.art.art_ref', [
            'artReferences' => ArtReference::all()
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
}
