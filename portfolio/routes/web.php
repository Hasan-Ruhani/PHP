<?php

use App\Http\Controllers\portfolioController;
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
    return view('pages.home');
});

Route::get('/home', [portfolioController::class, 'getPortfolio'])->name('home');

Auth::routes();

Route::get('/user', [portfolioController::class, 'getUser']);

// Route::middleware('auth') -> group(function(){
// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
