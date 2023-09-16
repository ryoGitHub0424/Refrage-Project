<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ArcrefController;

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


/* --------------------------------

    ART REFERENCES

---------------------------------*/

/* --------------------------------

    ARCHITECTURE PORTFOLIO

---------------------------------*/

/* --------------------------------

    ART PORTFOLIO

---------------------------------*/




