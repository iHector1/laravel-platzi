<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/**
Route::get('/', [PageController::class,'home'])->name('home');

Route::get('blog',[PageController::class,'blog'])->name('blog');


Route::get('blog/{slug}', [PageController::class,'post'])->name('post');
 **/
Route::get('/s', function () {
       return view('welcome');
});

Route::controller(PageController::class)->group(function () {
       Route::get('/', 'home')->name('home');
       Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::get('/dashboard', function () {
       return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('posts', PostController::class)->except(['show'])->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';