<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('detail/{id}', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::post('message', [\App\Http\Controllers\HomeController::class, 'message'])->name('message');
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index')->middleware('is_admin');
Route::get('admin/cars/create', [\App\Http\Controllers\Admin\CarController::class, 'create'])->name('create')->middleware('is_admin');
Route::get('inbox', [\App\Http\Controllers\admin\DashboardController::class, 'inbox'])->name('inbox')->middleware('is_admin');;
Route::post('admin/cars/create', [\App\Http\Controllers\Admin\CarController::class, 'store'])->name('store')->middleware('is_admin');;
Route::get('create', [\App\Http\Controllers\Admin\CarController::class, 'create'])->name('create')->middleware('is_admin');;
Route::get('show', [\App\Http\Controllers\Admin\CarController::class, 'show'])->name('show')->middleware('is_admin');;
Route::get('edit/{id}', [\App\Http\Controllers\Admin\CarController::class, 'edit'])->name('edit')->middleware('is_admin');;
Route::post('update/{id}', [\App\Http\Controllers\Admin\CarController::class, 'update'])->name('update')->middleware('is_admin');;
Route::get('destroy/{id}', [\App\Http\Controllers\Admin\CarController::class, 'destroy'])->name('destroy')->middleware('is_admin');;
Route::get('deleteinbox/{id}', [\App\Http\Controllers\Admin\DashboardController::class, 'destroyMessage'])->name('destroyMessage')->middleware('is_admin');;
Route::get('logout', [\App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('logout')->middleware('is_admin');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
