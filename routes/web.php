<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;


use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('blog', function () {
    return view('blog');
})->name('blog');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('listing', function () {
    return view('listing');
})->name('listing');
Route::get('single', function () {
    return view('single');
})->name('single');
Route::get('testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('main', function () {
    return view('main');
})->name('main');

Route::fallback(fn () => redirect('main'));

/*****************************Admin Dashboard*********************************/
Route::prefix('admin')->group(function () {
    Route::get('addcar', [CarController::class, 'create']);
    Route::get('cars', [CarController::class, 'index']);
    Route::get('editcar', [CarController::class, 'edit']);

    Route::get('addcategory', [CategoryController::class, 'create']);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('editcategory', [CategoryController::class, 'edit']);

    Route::get('adduser', [UserController::class, 'create']);
    Route::get('user', [UserController::class, 'index']);
    Route::get('edituser', [UserController::class, 'edit']);

    Route::get('addtestimonials', [TestimonialController::class, 'create']);
    Route::get('testimonials', [TestimonialController::class, 'index']);
    Route::get('edittestimonials', [TestimonialController::class, 'edit']);

    Route::get('messages', [MessageController::class, 'index']);
    Route::get('showmessage', [MessageController::class, 'show']);
});

Route::post('car', [CarController::class, 'store']);
