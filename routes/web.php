<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\UniverseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/space');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    // return redirect('/space');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/space')->group(function () {
        Route::view('/', 'space.space');
        Route::get('/planets', [PlanetController::class, 'index']);
        Route::get('/planets/{planet}', [PlanetController::class, 'show']);
        Route::get('/universes', [UniverseController::class, 'index']);
        Route::get('/universes/{universe:name}', [UniverseController::class, 'show']);
    });
});

require __DIR__.'/auth.php';
