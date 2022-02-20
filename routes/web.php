<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [UserController::class, 'index']);
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/questions', [AdminController::class, 'questions']);
Route::get('admin/questions/{question}', [AdminController::class, 'show_question'])->name('show_question');
Route::get('product/{product}', [UserController::class, 'show'])->name('show_product');

Route::post('admin', [AdminController::class, 'add_product'])->name('add_product');
Route::post('/admin/questions/{question}', [AdminController::class, 'add_answer'])->name('add_answer');
Route::post('product/{product}', [UserController::class, 'add_question'])->name('add_question');
