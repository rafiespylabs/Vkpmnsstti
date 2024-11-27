<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('/about', [WebController::class, 'about'])->name('web.about');
Route::get('/faculty', [WebController::class, 'faculty'])->name('web.faculty');
Route::get('/students', [WebController::class, 'students'])->name('web.students');
Route::get('/achievements', [WebController::class, 'achievements'])->name('web.achievements');
Route::get('/gallery', [WebController::class, 'gallery'])->name('web.gallery');
Route::get('/academics', [WebController::class, 'academics'])->name('web.academics');
Route::get('/contact', [WebController::class, 'contact'])->name('web.contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
