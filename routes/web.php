<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Public Routes (No Authentication)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

Route::view('/about', 'frontend.about');

// Dynamic pages
Route::get('/education', [EducationController::class, 'publicIndex']);
Route::get('/experience', [ExperienceController::class, 'publicIndex']);

Route::view('/contact', 'frontend.contact');

// Projects (Public)
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{slug}', [ProjectController::class, 'show']);

// Contact Form
Route::post('/contact', [ContactController::class, 'send']);


/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->group(function () {

    // ✅ Dashboard route (FIXED)
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Redirect /admin → dashboard
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });

    // Projects
    Route::get('/projects', [ProjectController::class, 'adminIndex']);
    Route::resource('/projects', ProjectController::class)->except(['index', 'show']);

    // Education
    Route::resource('/education', EducationController::class);

    // Experience
    Route::resource('/experience', ExperienceController::class);

    // Resume Settings
    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/settings', [SettingController::class, 'store']);
});


/*
|--------------------------------------------------------------------------
| Auth Routes (Laravel Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';