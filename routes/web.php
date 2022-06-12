<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\HobbieController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialNetworkController;
use App\Http\Controllers\Admin\WorkExpirianceController;
use App\Http\Controllers\IndexController;
use App\Models\Education;
use App\Models\Skill;
use App\Models\WorkExpiriance;
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
Route::get('/home', [IndexController::class, "index"])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::middleware('admin.check:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('admin');
            Route::resource('/contact', ContactController::class);
            Route::resource('/social-network', SocialNetworkController::class);
            Route::resource('/work-experience', WorkExpirianceController::class);
            Route::resource('/education', EducationController::class);
            Route::resource('/skill', SkillController::class);
            Route::resource('/reference', ReferenceController::class);
            Route::resource('/hobbies', HobbieController::class);
        });
    });
});

Auth::routes();

