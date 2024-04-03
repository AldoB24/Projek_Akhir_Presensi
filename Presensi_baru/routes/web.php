<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Login\ForgotPasswordController;
use App\Http\Controllers\Login\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DKController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\JKController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\TepatController;
use App\Http\Controllers\TelatController;

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

Route::post('/register', [RegisterController::class, 'register'])->name('register');

//route beranda
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dk', [DKController::class, 'index']);
Route::get('/izin', [IzinController::class, 'index']);
Route::get('/jk', [JKController::class, 'index']);
Route::get('/rekap', [RekapController::class, 'index']);
Route::get('/tepat', [TepatController::class, 'index']);
Route::get('/telat', [TelatController::class, 'index']);