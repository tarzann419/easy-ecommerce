<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;

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



Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});




Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


// all admin
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

// admin profile
Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change-password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/admin/change-password', [AdminProfileController::class, 'AdminUpdatePassword'])->name('update.change.password');




// user route 
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard', compact('user'));
})->name('dashboard');



Route::controller(IndexController::class)->prefix('user')->group(function(){
    Route::get('/', 'index');
    Route::get('/logout', 'UserLogout')->name('user.logout');
    Route::get('/profile', 'UserProfile')->name('user.profile');
    Route::post('/update-profile', 'UpdateProfile')->name('update.profile');
    Route::get('/change-password', 'ChangePassword')->name('change.password');
    Route::post('/change-update-password', 'ChangeUpdatePassword')->name('change.password.store');

});


Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});


Route::controller(BrandController::class)->prefix('brand')->group(function(){
    Route::get('/view', 'AllBrand')->name('all.brand');
    Route::get('/store', 'StoreBrand')->name('brand.store');
});