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
}
