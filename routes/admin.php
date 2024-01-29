<?php

use App\Http\Controllers\Admin\AuthController as AuthController;
use App\Http\Controllers\Admin\DashboardController as DashboardController;
use App\Http\Controllers\Admin\PlanController as PlanController;
use App\Http\Controllers\Admin\PostController as PostController;
use App\Http\Controllers\Admin\UserController as UserController;
use App\Models\Post;
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


Route::group(['middleware' => 'admin'], function () {
Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/home', [DashboardController::class,'index'])->name('dashboard');
Route::get('/users', [UserController::class,'users'])->name('users');
Route::get('/users/{user}', [UserController::class, 'toggleUserStatus'])->name('users.status.toggle');
Route::get('/user-detail/{user?}', [UserController::class, 'userDetail'])->name('user.detail');

Route::get('/subscriptions',[PlanController::class, 'subscriptions'])->name('subscription');
Route::get('/subscription-plan', [PlanController::class, 'index'])->name('sub-plan');

Route::get('/payment-logs',[PlanController::class, 'paymentLogs'])->name('payment');
Route::get('/create-plan',[PlanController::class, 'create'])->name('plan.create');
Route::post('/create-plan',[PlanController::class,'store'])->name('plan.store');
Route::get('/edit-plan/{plan}',[PlanController::class, 'edit'])->name('plan.edit');
Route::post('/edit-plan/{plan}',[PlanController::class, 'update'])->name('plan.update');

Route::get('/post', function () {
    return view('user.post-manage');
})->name('post');
Route::get('/feedback', function () {
    return view('user.feedback.index');
})->name('feedback');
Route::get('/feedback-management', function () {
    return view('user.feedback.feedback-manage');
})->name('manage-feedback');
Route::get('/profile', [AuthController::class,'profile'])->name('profile');
Route::get('/edit-profile', function () {
    return view('user.profile.profile-edit');
})->name('editProfile');
Route::get('/edit-password', function () {
    return view('user.profile.edit-password');
})->name('edit-password');
Route::get('/notifications', function () {
    return view('user.notifications');
})->name('notification');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/cover',[AuthController::class,'uploadCover'])->name('upload-cover');
Route::post('/profile',[AuthController::class,'uploadProfile'])->name('upload-profile');
Route::post('/update-password',[AuthController::class,'updatePassword'])->name('password.update');
Route::post('/user-edit',[AuthController::class,'userEdit'])->name('user.edit');
Route::resource('posts', PostController::class);
Route::get('/post/{post}', [PostController::class, 'togglePostStatus'])->name('post.status');

Route::get('plans', [PlanController::class, 'index'])->name('plan.index');
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});



//guest
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('r');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');
});
