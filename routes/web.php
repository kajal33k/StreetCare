<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\DifferenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransformController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Termwind\Components\Hr;

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
Route::get('/adopt', [HomeController::class, 'adopt'])->name('frontend.adopt');
Route::get('/care', [HomeController::class, 'care'])->name('frontend.care');
Route::get('/medical', [HomeController::class, 'medical'])->name('frontend.medical');
Route::get('/protect', [HomeController::class, 'protect'])->name('frontend.protect');
Route::get('/rescue', [HomeController::class, 'rescue'])->name('frontend.rescue');
Route::get('/know', [HomeController::class, 'know'])->name('frontend.know');
Route::get('gaurdian', [HomeController::class, 'gaurdian'])->name('frontend.gaurdian');
Route::get('/help', [HomeController::class, 'help'])->name('frontend.help');
Route::get('/report', [HomeController::class, 'report'])->name('frontend.report');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('frontend.privacy');


// backend/////////////////////////////////////////////////////////////////
// ------------------------------------------BANNER------------------------------------------
Route::get('/backend/banner/index', [BannerController::class, 'index'])->name('backend.banner.index');
Route::get('backend/banner/create', [BannerController::class, 'create'])->name('backend.banner.create');
Route::post('backend/banner/store', [BannerController::class, 'store'])->name('backend.banner.store');
Route::get('/backend/banner/{banner}/edit', [BannerController::class, 'edit'])->name('backend.banner.edit');
Route::put('backend/banner/{id}/update', [BannerController::class, 'update'])->name('backend.banner.update');
Route::delete('/backend/banner/{banner}/destroy', [BannerController::class, 'destroy'])->name('backend.banner.destroy');

// ---------------------------------------------DIFFERENCE------------------------------------------
Route::get('/backend/difference/index', [DifferenceController::class, 'index'])->name('backend.difference.index');
Route::get('/backend/difference/create', [DifferenceController::class, 'create'])->name('backend.difference.create');
Route::post('/backend/difference/store', [DifferenceController::class, 'store'])->name('backend.difference.store');
Route::get('/backend/difference/{difference}/edit', [DifferenceController::class, 'edit'])->name('backend.difference.edit');
Route::put('/backend/difference/{id}/update', [DifferenceController::class, 'update'])->name('backend.difference.update');
Route::delete('/backend/differece/{difference}/destroy', [DifferenceController::class, 'destroy'])->name('backend.difference.destroy'); 


// -------------------------------------------------TRNASFORM------------------------------------------
Route::get('/backend/transform/index', [TransformController::class, 'index'])->name('backend.transform.index');
Route::get('backend/transform/create', [TransformController::class, 'create'])->name('backend.transform.create');
Route::post('/backend/tranform/store', [TransformController::class, 'store'])->name('backend.transform.store');
Route::get('/backend/transform/{transform}/edit', [TransformController::class, 'edit'])->name('backend.transform.edit');
Route::put('/backend/transform/{id}/update', [TransformController::class, 'update'])->name('backend.transform.update');
Route::delete('/backend/trabsform/{transform}/destroy', [TransformController::class, 'destroy'])->name('backend.transform.destroy');