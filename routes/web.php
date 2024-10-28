<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
require_once __DIR__ . '/admin.php';
require_once __DIR__ . '/user.php';

//project start
Route::redirect('/', 'auth/login');
//git hub and google login
Route::get('auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('auth/{provider}/callback', [ProviderController::class, 'callback']);

//custom register/login
Route::get('auth/register', [CustomAuthController::class, 'registerPage'])->name('userRegister');
Route::get('auth/login', [CustomAuthController::class, 'loginPage'])->name('userLogin');
// 404page
Route::get('404', function () {
    return view('404');
})->name('404page');


// user
Route::group(['prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('/home', [UserDashboardController::class, 'index'])->name('userDashboard');
});







