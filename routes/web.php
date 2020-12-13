<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main_website.index');
})->name('home');
Route::get('/contact-us', function () {
    return view('main_website.contact-us');
})->name('contact-us');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('user_profile', App\Http\Controllers\UserProfileController::class);
