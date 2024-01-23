<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/',[HomeController::class, 'index'])->name('home.post');
Route::post('result',[HomeController::class, 'result'])->name('result');
Route::fallback(function () {
    return view('index');
});