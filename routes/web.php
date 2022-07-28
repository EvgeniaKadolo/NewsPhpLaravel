<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/rubric/{rubric}', [IndexController::class, 'rubric']);
Route::get('/statya/{id}', [IndexController::class, 'statya'])->name('statya');
Route::get('/add', [IndexController::class, 'add'])->middleware('auth');
Route::get('/change/{post}', [IndexController::class, 'change'])->name('change')->middleware('auth');
Route::post('/edit/{post}', [IndexController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/add', [IndexController::class, 'store'])->name('store')->middleware('auth');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::delete('/delete/{post}', [IndexController::class, 'delete'])->name('delete')->middleware('auth');
