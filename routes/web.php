<?php

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/{category_id}/sub-categories', [CategoryController::class, 'getSubCategories'])->name('category.sub_categories');
