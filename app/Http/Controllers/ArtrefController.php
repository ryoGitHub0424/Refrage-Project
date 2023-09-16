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
}
