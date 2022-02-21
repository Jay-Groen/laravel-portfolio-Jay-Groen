<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\PostfeedController;

use App\Http\Controllers\StudiekeuzeController;

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

Route::get('/tests/{test}', [TestController::class, 'show']);

Route::get('home', [WelcomeController::class, 'show']);

Route::get('profile', [ProfileController::class, 'show']);

Route::get('dashboard', [DashboardController::class, 'show']);

Route::get('faq', [FaqController::class, 'show']);

//Route::get('/articles', [PostfeedController::class, 'index']);
//Route::post('/articles', [PostfeedController::class, 'store']);
//Route::get('/articles/create', [PostfeedController::class, 'create']);
//Route::get('/articles/{article}', [PostfeedController::class, 'show']);
//Route::get('/articles/{article}/edit', [PostfeedController::class, 'edit']);
//Route::put('/articles/{article}', [PostfeedController::class, 'update']);
//Route::delete('/articles/{article}', [PostfeedController::class, 'destroy']);

Route::resource('/articles', PostfeedController::class);
