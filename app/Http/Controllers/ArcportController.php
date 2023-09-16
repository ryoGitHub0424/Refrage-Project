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
   
}
