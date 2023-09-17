<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ArcrefController;
use App\Http\Controllers\ArtrefController;
use App\Http\Controllers\ArcportController;
use App\Http\Controllers\ArtportController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Front Page
Route::get('/', [ShowController::class, 'showFront']);

// Logged page
Route::get('/logged_page', [ShowController::class, 'loggedPage']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/* --------------------------------

    ARCHITECTURE REFERENCES

---------------------------------*/
Route::get('/architecture_references', [ArcrefController::class, 'index']);

Route::get('/architecture_references/create', [ArcrefController::class, 'create']);

Route::post('/architecture_references', [ArcrefController::class, 'store']);

Route::get('/architecture_references/{arcReference}/edit', [ArcrefController::class, 'edit']);

Route::get('/architecture_references/{arcReference}', [ArcrefController::class, 'show']);

/* --------------------------------

    ART REFERENCES

---------------------------------*/
Route::get('/art_references', [ArtrefController::class, 'index']);

Route::get('/art_references/create', [ArtrefController::class, 'create']);

Route::post('/art_references', [ArtrefController::class, 'store']);

Route::get('/art_references/{artReference}/edit', [ArtrefController::class, 'edit']);

Route::get('/art_references/{artReference}', [ArtrefController::class, 'show']);



/* --------------------------------

    ARCHITECTURE PORTFOLIO

---------------------------------*/
Route::get('/architecture_portfolios', [ArcportController::class, 'index']);

Route::get('/architecture_portfolios/create', [ArcportController::class, 'create']);

Route::post('/architecture_portfolios', [ArcportController::class, 'store']);

Route::get('/architecture_portfolios/{arcPortfolio}/edit', [ArcportController::class, 'edit']);

Route::get('/architecture_portfolios/{arcPortfolio}', [ArcportController::class, 'show']);


/* --------------------------------

    ART PORTFOLIO

---------------------------------*/
Route::get('/art_portfolios', [ArtportController::class, 'index']);

Route::get('/art_portfolios/create', [ArtportController::class, 'create']);

Route::post('art_portfolios', [ArtportController::class, 'store']);

Route::get('art_portfolios/{artPortfolio}/edit', [ArtportController::class, 'edit']);

Route::get('/art_portfolios/{artPortfolio}', [ArtportController::class, 'show']);



