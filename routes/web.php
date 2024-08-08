<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenefitProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home.index');
// })->name('home');

Route::get('/', [HomeController::class, 'homeData'])->name('home');


Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{id}', [ArticleController::class, 'articleShowDetail'])->name('articles.showDetail');
Route::get('benefit', [ProductController::class, 'productsShow'])->name('beneift.index');

Route::get('adm', [AuthController::class, 'showLoginForm'])->name('login.index');


Route::get('/dashboard-articles', [ArticleController::class, 'articlesShow'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    // articles
    Route::delete('/dashboard-articles/{id}/delete', [ArticleController::class, 'articlesDelete'])->name('dashboard.delete');
    Route::get('/dashboard-articles/create', [ArticleController::class, 'articlesCreate'])->name('dashboard.add');
    Route::post('/dashboard-articles/create', [ArticleController::class, 'articleStore'])->name('dashboard.store');
    // update
    Route::get('/dashboard-articles/{id}/edit', [ArticleController::class, 'articlesEdit'])->name('dashboard.edit');
    Route::patch('/dashboard-articles/{id}/update', [ArticleController::class, 'articlesUpdate'])->name('dashboard.update');

    // products
    Route::get('/dashboard-products', [ProductController::class, 'index'])->name('dashboard-products');
    Route::delete('/dashboard-products/{id}/delete', [ProductController::class, 'productsDelete'])->name('dashboard_products.delete');
    Route::get('/dashboard-products/create', [ProductController::class, 'productsCreate'])->name('dashboard_products.add');
    Route::post('/dashboard-products/create', [ProductController::class, 'productsStore'])->name('dashboard_products.store');
    // update
    Route::get('/dashboard-products/{id}/edit', [ProductController::class, 'productsEdit'])->name('dashboard_products.edit');
    Route::patch('/dashboard-products/{id}/update', [ProductController::class, 'productsUpdate'])->name('dashboard_products.update');

});

require __DIR__.'/auth.php';
