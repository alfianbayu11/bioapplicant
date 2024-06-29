<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;



Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    if (auth()->user()->usertype == 'admin') {
        return redirect('/admin/dashboard');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index');
    Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
    Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
});

Route::middleware(['auth', 'admin'])->group(function () {
 
    Route::get('admin/dashboard', [HomeController::class, 'index']);
    Route::get('/admin/dashboard', [BiodataController::class, 'index'])->name('admin.dashboard');
    Route::resource('biodata', BiodataController::class)->except(['index']);
    Route::resource('biodata', BiodataController::class);
    Route::get('admin/biodata/{id}/edit', [BiodataController::class, 'edit'])->name('admin.biodata.edit');
    Route::get('admin/biodata/{id}', [BiodataController::class, 'show'])->name('admin.biodata.show');
    Route::put('admin/biodata/{id}', [BiodataController::class, 'update'])->name('admin.biodata.update');

    Route::delete('biodata/{id}', [BiodataController::class, 'destroy'])->name('admin.biodata.destroy');

 
    // Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    // Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    // Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
    // Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    // Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    // Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
});
 
require __DIR__.'/auth.php';