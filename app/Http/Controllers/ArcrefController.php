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
}
