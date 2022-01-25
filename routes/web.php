<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('login',[HomeController::class,'login'])->name('login');

Route::get('register',[HomeController::class,'register'])->name('registro');

Route::get('pdf',[HomeController::class,'vistapdf'])->name('pdf');

Route::post('ajax',[HomeController::class,'ajax'])->name('ajax');

Route::resource('users', UserController::class);

Route::post('auth', [UserController::class,'auth'])->name('auth');

Route::post('registroUser', [UserController::class,'register'])->name('registroUser');

Route::get('logout', [UserController::class,'logout'])->name('logout');

Route::resource('posts', PostController::class);

Route::resource('categories', CategoryController::class);

Route::post('categories.editar',[CategoryController::class,'editar'])->name('editCategory');
Route::post('categories.eliminar',[CategoryController::class,'eliminar'])->name('deleteCategory');