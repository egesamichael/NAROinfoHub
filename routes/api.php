<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VetVaccinationController;
use App\Http\Controllers\FarmerAdoptionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Anti-tick vaccine data routes
Route::get('/vet-vaccinations', [VetVaccinationController::class, 'index']);
Route::get('/farmer-adoptions', [FarmerAdoptionController::class, 'index']);
