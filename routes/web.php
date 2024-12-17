<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/search','search')->name('search');
Route::resource('/blogs', BlogController::class);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::resource('/services', ServiceController::class);
Route::resource('/comments', CommentController::class);
Route::view('/video', 'video')->name('video');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/doctor/{id}', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/depatments', [DepartmentController::class, 'index'])->name('depatments');
Route::get('/depatments/{department}', [DepartmentController::class, 'department'])->name('depatment.show');

Route::get('/depatmentstest', function () {
    $services = \App\Models\Service::all()->where('status', 1)->unique('department');
    return $services;
})->name('depatmentstest');


Route::fallback(function () {
    return view('404');
});
