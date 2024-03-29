<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Login\ForgotPasswordController;
use App\Http\Controllers\Login\LogoutController;
use App\Http\Controllers\DashboardController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'login']); //route post untuk login
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');
