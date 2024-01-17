<?php

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
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('addcar', function () {
        return view('admin/addCar');
    });
    Route::get('cars', function () {
        return view('admin/cars');
    });
    Route::get('editcar', function () {
        return view('admin/editCar');
    });
    Route::get('addcategory', function () {
        return view('admin/addCategory');
    });
    Route::get('categories', function () {
        return view('admin/categories');
    });
    Route::get('editcategory', function () {
        return view('admin/editCategory');
    });

    Route::get('adduser', function () {
        return view('admin/addUser');
    });
    Route::get('users', function () {
        return view('admin/users');
    });
    Route::get('edituser', function () {
        return view('admin/editUser');
    });
    Route::get('addtestimonials', function () {
        return view('admin/addTestimonials');
    });
    Route::get('testimonials', function () {
        return view('admin/testimonials');
    });
    Route::get('edittestimonial', function () {
        return view('admin/editTestimonials');
    });
    Route::get('messages', function () {
        return view('admin/messages');
    });
    Route::get('showmessages', function () {
        return view('admin/showMessages');
    });
});
