<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/services','services')->name('services');
Route::view('/search','search')->name('search');
// Route::view('/blog','blog');
// Display all blog posts
Route::view('/post', 'blog');
Route::resource('/blogs', BlogController::class);

// Route::post('/blogs/{blog}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::fallback(function () {
    return view('404');
});
