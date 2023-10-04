<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\WidgetController;

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
})->name('login');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:web')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group( function () {
        Route::post('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
        Route::get('posts', [DashboardController::class, 'posts'])->name('admin.posts');
        Route::resource('projects',ProjectController::class)->except(['update']);
        Route::resource('articles',ArticleController::class);
        Route::resource('tags',TagController::class);
        Route::resource('widgets',WidgetController::class);
    });

});
