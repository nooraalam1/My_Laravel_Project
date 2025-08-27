<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin'])->name('adminDashHome');
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/categories',[AdminController::class,'index'])->middleware(['auth','admin'])->name('admin.categories');
Route::post('/categories',[AdminController::class,'create'])->middleware(['auth','admin'])->name('create');
Route::get('/categories/edit/{data}',[AdminController::class,'edit'])->middleware(['auth','admin'])->name('edit');
Route::put('/categories/edit/{data}',[AdminController::class,'update'])->middleware(['auth','admin'])->name('update');
Route::delete('/categories/delete/{data}',[AdminController::class,'delete'])->middleware(['auth','admin'])->name('delete');

Route::get('/add_product',[AdminController::class,'addProduct'])->middleware(['auth','admin'])->name('addProduct');
Route::post('/store_product',[AdminController::class,'storeProduct'])->middleware(['auth','admin'])->name('storeProduct');
Route::get('/view_products',[AdminController::class,'viewProducts'])->middleware(['auth','admin'])->name('viewProducts');
Route::get('/edit_viewProducts/{data}',[AdminController::class,'editViewProducts'])->middleware(['auth','admin'])->name('editViewProducts');
Route::put('/update_viewProducts/{data}',[AdminController::class,'updateViewProducts'])->middleware(['auth','admin'])->name('updateViewProducts');
