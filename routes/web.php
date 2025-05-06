<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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

Route::get('/', function () {
    $vehicules = \App\Models\Vehicule::all();
    return view('home', compact("vehicules"));
})->name("home");

Route::get('/locations', [LocationController::class, "index"])->name("locations.index");
Route::get('/locations/add', [LocationController::class, "add"])->name("locations.add");
Route::post('/locations/store', [LocationController::class, "store"])->name("locations.store");

