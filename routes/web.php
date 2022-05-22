<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;;

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

Route::get('/', [IndexController::class, "index"])->name('welcome');

Route::middleware(['auth'])->group(function () {

    Route::middleware('admin.check:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('admin');
        });
    });
});

Auth::routes();

