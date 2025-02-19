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


Route::get('/fix', function () {
    $sourcePath = storage_path('app/public/');
    $destinationPath = public_path('storage'); 

    // Ensure the destination directory exists
    if (!File::exists($destinationPath)) {
        File::makeDirectory($destinationPath, 0755, true);
    }
    
    // Clean the destination directory before copying
    if (File::exists($destinationPath)) {
        File::deleteDirectory($destinationPath);
        File::makeDirectory($destinationPath, 0755, true);
    }
    
    // Get all files recursively in the source directory
    $files = File::allFiles($sourcePath);
    
    foreach ($files as $file) {
        // Log the file path
        Log::info('File found: ' . $file->getPathname());
    
        // Define the target path for the file
        $targetPath = $destinationPath . '/' . $file->getRelativePathname();
    
        // Ensure subdirectories exist in the target
        $targetDir = dirname($targetPath);
        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }
    
        // Copy the file to the destination
        File::copy($file->getPathname(), $targetPath);
        
    }
return redirect()->route('home');
});

Route::fallback(function () {
    return view('404');
});
