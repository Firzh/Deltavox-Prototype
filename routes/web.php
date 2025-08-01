<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Import controllers for new routes
use App\Http\Controllers\CarController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\PartnerController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Car
Route::get('/car', [CarController::class, 'index'])->name('car');

// Team
Route::get('/team', [TeamController::class, 'index'])->name('team');

// Activities
// Penting: Gunakan hanya satu nama rute yang jelas untuk rute daftar/indeks.
// Ini adalah penyebab paling umum dari "Illegal offset type" jika array digunakan tidak tepat.
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities.index');

// Partners
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');

// Events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Projects
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');