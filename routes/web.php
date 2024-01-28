<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Category;
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

//Route::fallback(fn () => redirect('main'));

/*****************************Admin Dashboard*********************************/
Route::prefix('admin')->group(function () {
    Route::get('addcar', [CarController::class, 'create'])->name('addcar');
    Route::get('cars', [CarController::class, 'index'])->name('cars');
    Route::get('editcar/{id}', [CarController::class, 'edit'])->name('editcar');
    Route::get('deletecar/{id}', [CarController::class, 'destroy'])->name('deletecar');
    Route::put('editcar/{id}', [CarController::class, 'update'])->name('updatecar');
    Route::post('car', [CarController::class, 'store'])->name('car');



    Route::get('addcategory', [CategoryController::class, 'create'])->name('addcategory');
    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
    Route::get('deletecategory/{id}', [CategoryController::class, 'destroy'])->name('deletecategory');
    Route::put('editcategory/{id}', [CategoryController::class, 'update'])->name('updatecategory');
    Route::post('category', [CategoryController::class, 'store'])->name('category');



    Route::get('adduser', [UserController::class, 'create'])->name('adduser');
    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('edituser/{id}', [UserController::class, 'edit'])->name('edituser');
    Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
    Route::put('edituser/{id}', [UserController::class, 'update'])->name('updateuser');
    Route::post('user', [UserController::class, 'store'])->name('user');


    Route::get('addtestimonials', [TestimonialController::class, 'create'])->name('addtestimonials');
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('edittestimonials/{id}', [TestimonialController::class, 'edit'])->name('edittestimonials');
    Route::get('deletetestimonials/{id}', [TestimonialController::class, 'destroy'])->name('deletetestimonials');
    Route::put('edittestimonials/{id}', [TestimonialController::class, 'update'])->name('updatetestimonials');
    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial');


    Route::get('messages', [MessageController::class, 'index'])->name('messages');
    Route::get('showmessage/{id}', [MessageController::class, 'show'])->name('showmessage');
    Route::get('deletemessage/{id}', [MessageController::class, 'destroy'])->name('deletemessage');
});
