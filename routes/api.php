<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GasPriceController;
use App\Http\Controllers\API\AgencyController;
use App\Http\Controllers\API\ContactController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Define a GET route for fetching gas price data
Route::get('gasprice', [GasPriceController::class, 'get'])->name('api.gasprice.get');

Route::get('gasbooking', [GasPriceController::class, 'get'])->name('api.gasbooking.get');


Route::prefix('agencies')->group(function () {
    Route::get('/', [AgencyController::class, 'index']);         // Get all agencies
    // Route::post('/', [AgencyController::class, 'store']);        // Create a new agency
    // Route::get('{id}', [AgencyController::class, 'show']);       // Get a single agency by ID
    // Route::put('{id}', [AgencyController::class, 'update']);     // Update an agency by ID
    // Route::delete('{id}', [AgencyController::class, 'destroy']); // Delete an agency by ID
});


Route::get('contact', [ContactController::class, 'index'])->name('contactlist');