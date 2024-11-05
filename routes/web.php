<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
// Route::view('/blogs','blog')->name('blogs');
Route::resource('blogs', BlogController::class);
Route::post('blogs/{blog}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::fallback(function () {
    return view('404');
});
