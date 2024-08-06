<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenefitProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');


Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{id}', [ArticleController::class, 'articleShowDetail'])->name('articles.showDetail');
Route::get('benefit', [BenefitProductController::class, 'index'])->name('benefit.index');


Route::get('adm', [AuthController::class, 'showLoginForm'])->name('login.index');


Route::get('/dashboard-articles', [ArticleController::class, 'articlesShow'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // articles
    Route::delete('/dashboard-articles/{id}/delete', [ArticleController::class, 'articlesDelete'])->name('dashboard.delete');
    Route::get('/dashboard-articles/create', [ArticleController::class, 'articlesCreate'])->name('dashboard.add');
    Route::post('/dashboard-articles/create', [ArticleController::class, 'articleStore'])->name('dashboard.store');
    // update
    Route::get('/dashboard-articles/{id}/edit', [ArticleController::class, 'articlesEdit'])->name('dashboard.edit');
    Route::patch('/dashboard-articles/{id}/update', [ArticleController::class, 'articlesUpdate'])->name('dashboard.update');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
