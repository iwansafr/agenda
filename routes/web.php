<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Product\AddProduct;
use App\Livewire\Product\ListProduct;
use App\Livewire\UserProfile;
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

Route::get('login', function () {
    return view('admin.login');
})->middleware('guest')->name('login');
Route::post('logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/profile', UserProfile::class)->name('profile');
});


