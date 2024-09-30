<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ContactController;


Route::get('login', [AuthController::class, 'showLoginPage'])->name('login');
Route::get('register', [AuthController::class, 'showRegisterPage'])->name('register');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('rate', [DashboardController::class, 'showRate'])->name('rate');

    Route::get('gasprice/edit', [DashboardController::class, 'editGasPrice'])->name('gasprice.edit');
    Route::post('gasprice/save', [DashboardController::class, 'saveGasPrice'])->name('gasprice.save');

    Route::get('gasbooking', [DashboardController::class, 'showGasBookingForm'])->name('gasbooking.form');
    Route::post('gasbooking/save', [DashboardController::class, 'saveGasBooking'])->name('gasbooking.save');
    Route::get('gasbooking/content', [DashboardController::class, 'content'])->name('content');


    Route::get('/contents', [DashboardController::class, 'index'])->name('contents.index');
    Route::post('/contents', [DashboardController::class, 'contentstore'])->name('contents.store');

    Route::get('/agency', [AgencyController::class, 'index'])->name('agency');
    Route::post('/agency', [AgencyController::class, 'store'])->name('agency.store');
    Route::get('/agencylist', [AgencyController::class, 'list'])->name('agency.list');
    Route::get('/agency/{id}/edit', [AgencyController::class, 'edit'])->name('agencies.edit');
    Route::put('/agency/{id}', [AgencyController::class, 'update'])->name('agencies.update');
    Route::delete('/agency/{id}', [AgencyController::class, 'destroy'])->name('agencies.destroy');


    
    
    
});
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
// Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
