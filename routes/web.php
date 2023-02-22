<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::resource('index',RecipesController::class);
// Route::get('/recipes', [RecipesController::class, 'create'])->name('recipes.create');
// Route::get('/recipes/user-recipes', [RecipesController::class, 'create'])->name('recipes.user-recipes.create');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/recipes/{id}/edit',[RecipesController::class,'edit']);

Route::get('show',[RecipesController::class,'guest_recipes'], function () {
    return view('show');
});

Route::get('/show-full/{id}',[RecipesController::class,'IDrecipe']);

Route::get('/search',[RecipesController::class,'search']);

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/recipes', RecipesController::class);


});

require __DIR__.'/auth.php';
