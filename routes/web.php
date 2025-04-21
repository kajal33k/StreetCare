<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

// frontend Routes:::::::
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/volenteer', [HomeController::class, 'volenteer'])->name('volenteer');
Route::get('/saviour', [HomeController::class, 'saviour'])->name('saviour');
Route::get('/protector', [HomeController::class, 'protector'])->name('protector');
Route::get('/informer', [HomeController::class, 'informer'])->name('informer');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/donate', [HomeController::class, 'donate'])->name('frontend.donate');
Route::get('/learn', [HomeController::class, 'learn'])->name('frontend.learn');