<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomAuthController;





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
Route::redirect('/', 'auth/login');
//git hub and google login
Route::get('auth/{provider}/redirect',[ProviderController::class,'redirect']);
Route::get('auth/{provider}/callback',[ProviderController::class,'callback']);

//custom register/login
Route::get('auth/register',[CustomAuthController::class,'registerPage'])->name('userRegister');
Route::get('auth/login',[CustomAuthController::class,'loginPage'])->name('userLogin');


//admin

Route::get('admin/home',function(){
    return view('admin.home');
})->name('adminDashboard');

Route::get('customer/home',function(){
    return view('customer.home');
})->name('userDashboard');
