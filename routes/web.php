<?php

use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index']);

Route::get('listings/create', [ListingController::class, 'create'])->name('listings.create');

Route::post('listings/store', [ListingController::class, 'store'])->name('listings.store');

Route::get('listings/{id}/edit', [ListingController::class, 'edit'])->name('listings.edit');

Route::post('listings/update/{id}', [ListingController::class, 'update'])->name('listings.update');

Route::get('listings/show/{id}', [ListingController::class, 'show'])->name('listings.show');

Route::post('listings/delete/{id}', [ListingController::class, 'destroy'])->name('listings.delete');

// Authentication

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);