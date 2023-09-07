<?php

use App\Http\Controllers\Admin\AccomodationController;
use App\Http\Controllers\Admin\DiningController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontAccomodationController;
use App\Http\Controllers\FrontDiningController;
use App\Http\Controllers\FrontGalleryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/thimphu', function () {
    return view('thimphu');
});


Route::middleware(['auth', 'verified'])->name('dashboard')->group(function(){
    Route::resource('dashboard', DashboardController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('galleries',GalleryController::class);
    Route::resource('rooms',AccomodationController::class);
    Route::resource('dining', DiningController::class);
});

Route::prefix('thimphu')->group(function(){
    Route::resource('accommodation', FrontAccomodationController::class);
    Route::resource('thimphugallery', FrontGalleryController::class);
    Route::resource('thimphudining', FrontDiningController::class);
});


require __DIR__.'/auth.php';
