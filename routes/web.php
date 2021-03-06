<?php

use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

// Route::view('/', 'welcome');
Route::view('/', 'top');
Route::view('/blog', 'blog/index');
Route::get('home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('system', [SystemController::class, 'index'])->name('system');
