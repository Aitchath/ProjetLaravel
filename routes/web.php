<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\CartController;
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

Route::get('/', [CommerceController::class, 'create'])->name('Commerce.form');
Route::post('/', [CommerceController::class, 'store'])->name('Commerce.store');
Route::get('/Première_pages', [CommerceController::class, 'ajout'])->name('Commerce.ajout');
Route::get('/commerce.update/{id}', [CommerceController::class, 'update'])->name('Commerce.update');
Route::post('/update', [CommerceController::class, 'traitement'])->name('Commerce.traitement');
Route::get('/commerce.delete/{id}', [CommerceController::class, 'delete'])->name('Commerce.delete');
Route::get('/commerce.actualise', [CommerceController::class, 'actualise'])->name('Commerce.actualise');
Route::get('/commerce.image', [CommerceController::class, 'image'])->name('Commerce.image');

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/panier/ajouter', [CartController::class, 'store'])->name('Cart.store');

Route::get('/panier/ajouter', 'CartContreoller@store')->name('cart.store');
require __DIR__.'/auth.php';
