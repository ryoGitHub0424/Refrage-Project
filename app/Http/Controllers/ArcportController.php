<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArcPortfolio;

class ArcportController extends Controller
{
   public function index() {
       return view('portfolio.architecture.arc_port', [
           'arcPortfolios' => ArcPortfolio::all(),
           ]);
   }
}
