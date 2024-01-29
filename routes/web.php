<?php

use App\Http\Controllers\User\AuthController as AuthController;
use App\Http\Controllers\User\FrontController as FrontController;
use App\Http\Controllers\User\PlanController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [FrontController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
    Route::controller(PlanController::class)->prefix('plans')->as('user.')->group(function (){
        Route::get('/', 'index')->name('plan');
        Route::post('/', 'payment')->name('payment');
    });
    Route::post('post/like', [\App\Http\Controllers\LikeController::class, 'likes'])->name('post.like');
});


//guest
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', function () {
        return view('auth.front.login');
    })->name('login');
    Route::get('/', function () {
        return view('auth.front.login');
    })->name('r');
    Route::post('/login', [AuthController::class, 'login'])->name('user.login');
    Route::get('/register', function () {
        return view('auth.front.register');
    })->name('user.register');
    Route::post('/register', [AuthController::class, 'register'])->name('user.register');
    Route::get('/forgot-password', function () {
        return view('auth.front.forgot-password');
    })->name('user.forgot-password');

    Route::get('/reset-password', function () {
        return view('auth.front.reset-password');
    })->name('reset-password');
    Route::get('/contact', function () {
        return view('front.contact-us');
    })->name('contact-us');
});
