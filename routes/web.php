<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:web')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/admin/posts', [DashboardController::class, 'posts'])->name('posts');
});
