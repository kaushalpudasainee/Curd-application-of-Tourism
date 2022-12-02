<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/add', [HomeController::class, 'add'])->name('add');
Route::get('/view', [HomeController::class, 'view'])->name('view');
Route::post('/add-customer', [CustomerController::class, 'addCustomer'])->name('addCustomer');
Route::get('delete/{id}', [CustomerController::class,'destroy']);
Route::get('edit/{id}', [CustomerController::class,'edit']);
Route::post('/edit', [CustomerController::class,'updateRecord'])->name('updateRecord');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


