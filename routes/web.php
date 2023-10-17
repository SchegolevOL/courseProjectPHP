<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
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
})->name('home');

Route::prefix('admin')->group(function () {
   Route::get('/', [MainController::class, 'index'])->name('admin.index')->middleware('admin');
   Route::resource('user', \App\Http\Controllers\Admin\AdminUserController::class);
   Route::resource('team', \App\Http\Controllers\Admin\AdminTeamController::class);
   Route::resource('post', \App\Http\Controllers\Admin\AdminPostController::class);
   Route::resource('game', \App\Http\Controllers\Admin\AdminGameController::class);
   Route::resource('club', \App\Http\Controllers\Admin\AdminClubController::class);
   Route::resource('stadium', \App\Http\Controllers\Admin\AdminStadiumController::class);
});

Route::get('register',[UserController::class, 'create'])->name('register.create');
Route::post('register',[UserController::class, 'store'])->name('register.store');
Route::get('login',[UserController::class, 'loginForm'])->name('login.create');
Route::post('login',[UserController::class, 'login'])->name('login');
Route::get('logout',[UserController::class, 'logout'])->name('logout');

