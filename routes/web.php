<?php

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'getProfile'])->name('profile');
Route::get('/matches', [App\Http\Controllers\HomeController::class, 'getMatches'])->name('matches');
Route::post('/finish-onboarding', [App\Http\Controllers\HomeController::class, 'finishOnboarding']);
